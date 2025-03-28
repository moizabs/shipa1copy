<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Blog;
use App\Models\VehicleName;
use App\Models\Service;
use App\Models\NewsletterSubscribers;
use App\Models\ServiceCategory;
use App\Models\ReviewSite;
use App\Models\NationWideTransport;
use App\Models\Marketing;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Hamcrest\Core\IsNot;


class FrontendController extends Controller
{
    public function index()
    {
        //        $output = Artisan::call('optimize');
        // $userId = 14;
        // $makes = VehicleName::where('UserId', $userId)
        //     ->where('status', 0)
        //     ->select('make')
        //     ->distinct()
        //     ->orderBy('make', 'ASC')
        //     ->get();
        // $blogs = Blog::where('status', 1)->take(3)->get(['id', 'post_name', 'slug_name', 'post_image', 'post_description']);
        // $reviews = Review::all();
        // $site_reviews = ReviewSite::all();
        $userId = 14; // Default to 14 if no user is logged in

        $makes = VehicleName::where('UserId', $userId)
            ->where('status', 0)
            ->distinct()
            ->orderBy('make', 'ASC')
            ->pluck('make'); // Use `pluck()` for better performance

        $blogs = Blog::where('status', 1)
            ->take(3)
            ->get(['id', 'post_name', 'slug_name', 'post_image', 'post_description']);

        $reviews = Review::latest()->limit(10)->get(); // Fetch latest 10 reviews instead of all
        $site_reviews = ReviewSite::latest()->limit(10)->get(); // Fetch latest 10 site reviews
        return view('frontend.index', compact('reviews', 'blogs', 'makes', 'site_reviews'));
    }
    public function blogs()
    {
        $query = Blog::where('category', '!=', 'Trailer & Trucks')->orderBy('id', 'DESC')->where('status', 1);
        $blogs = $query->paginate(10);
        $recent_blogs = $query->orderByDesc('id')->limit(5)->get();
        $blogTitle = Blog::select('id', 'post_name')->where('category', '!=', 'Trailer & Trucks')->get();
        return view('frontend.blogs.index', compact('blogs', 'blogTitle', 'recent_blogs'));
    }
    public function blogsTrailerTruck()
    {
        $blogTitle = Blog::where('category', 'Trailer & Trucks')->get();
        $blogs = Blog::where('category', 'Trailer & Trucks')->where('status', 1)->paginate(10);
        $recent_blogs = Blog::where('category', 'Trailer & Trucks')->where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.index', compact('blogs', 'blogTitle', 'recent_blogs'));
    }
    public function blogDetails($slug)
    {
        $blogs = Blog::where('slug_name', '!=', $slug)->take(5)->get();
        $blog = Blog::where('slug_name', $slug)->first();
        $recent_blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.detail', compact('blog', 'blogs', 'recent_blogs'));
    }
    public function blogDetailsNoSlug($slug)
    {
        \Log::info('Requested Slug: ' . $slug); // Debugging

        // Check if the blog exists
        $blog = Blog::where('slug_name', $slug)->first();

        if (!$blog) {
            // If blog doesn't exist, check for marketing
            $marketing = Marketing::where('slug', $slug)->first();

            if (!$marketing) {
                abort(404);
            }

            // Fetch necessary data with limits
            $marketings = Marketing::limit(50)->get();
            $makes = VehicleName::select('make')
                ->where('UserId', 14)
                ->where('status', 0)
                ->groupBy('make')
                ->orderBy('make', 'ASC')
                ->get();
            $blogs = Blog::where('status', 1)->take(3)->get(['id', 'post_name', 'slug_name', 'post_image', 'post_description']);
            $reviews = Review::limit(50)->get();
            $site_reviews = ReviewSite::limit(50)->get();

            return view('frontend.pages.marketing.show', compact('marketings', 'marketing', 'reviews', 'blogs', 'makes', 'site_reviews'));
        }

        // Fetch recent blogs based on type
        $recent_blogs = Blog::where('status', 1)
            ->when($blog->type == 'old', function ($query) {
                return $query->where('type', 'old');
            })
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get();

        // Fetch other blogs, avoiding duplicate query
        $other_blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();

        if ($blog->post_name) {
            return view('frontend.blogs.detail', compact('blog', 'other_blogs', 'recent_blogs'));
        }

        abort(404);
    }
    public function aboutUs()
    {
        $site_reviews = ReviewSite::get();
        $faqs = FAQs::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $reviews = Review::get();
        return view('frontend.pages.aboutUs', compact('reviews', 'faqs', 'blogs', 'site_reviews'));
    }
    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }
    public function services(Request $request)
    {
        if ($request->has('category')) {
            $category = ServiceCategory::whereSlug($request->category)->first();
            $services = Service::where('category_id', $category->id)->get();
        } else {
            $services = Service::get();
        }
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.services.index', compact('services', 'makes'));
    }
    public function serviceDetails(Request $request, $slug)
    {
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $faqs = FAQs::where('status', 1)->get();
        $service = Service::where('slug', $slug)->first();
        $related = Service::where('id', '!=', $service->id)->where('category_id', $service->category_id)->take(5)->get();
        if ($service->layout_type == 'new') {
            return view('frontend.pages.services.detail_new_layout', compact('service', 'related', 'faqs', 'site_reviews', 'blogs'));
        }
        return view('frontend.pages.services.detail', compact('service', 'related', 'faqs', 'site_reviews', 'blogs'));
    }
    public function autoAuction()
    {
        $blogs = Blog::where('status', 1)->take(3)->get();
        $site_reviews = ReviewSite::get();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.autoAuction', compact('makes', 'site_reviews', 'blogs'));
    }
    public function heavyAuction()
    {
        $blogs = Blog::where('status', 1)->take(3)->get();
        $site_reviews = ReviewSite::get();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.heavyAuction', compact('makes', 'site_reviews', 'blogs'));
    }
    public function thirdPartyLogistics()
    {
        $blogs = Blog::where('status', 1)->take(3)->get();
        $site_reviews = ReviewSite::get();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.third-party-logistics', compact('makes', 'site_reviews', 'blogs'));
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ], [
            'email.unique' => 'You have already subscribed to our newsletter.',
        ]);

        NewsletterSubscribers::create($request->only('email'));

        return response()->json(['message' => 'Subscription successful']);
    }
    public function orderTracking()
    {
        return view('frontend.pages.orderTracking');
    }
    public function termsAndConditions()
    {
        return view('frontend.pages.termsAndConditions');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function privacyPolicy()
    {
        return view('frontend.pages.privacyPolicy');
    }
    public function vehicleTransportDetail()
    {
        $transports = NationWideTransport::with('details')->where('category', 'Vehicle')->where('status', 1)->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        return view('frontend.pages.vehicleTransportDetail', compact('makes', 'blogs', 'site_reviews', 'transports'));
    }
    public function heavyTransportDetail()
    {
        $transports = NationWideTransport::with('details')->where('category', 'Heavy')->where('status', 1)->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.heavy-transport-detail', compact('blogs', 'site_reviews', 'transports'));
    }
    public function freightTransportDetail()
    {
        $transports = NationWideTransport::with('details')->where('category', 'Freight')->where('status', 1)->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.freighttransport-detail', compact('blogs', 'site_reviews', 'transports'));
    }
    public function hazmatTransport()
    {
        return view('frontend.forms.hazmattransport');
    }
    public function dryVan()
    {
        return view('frontend.forms.dryvan');
    }
    public function reeferTrucking()
    {
        return view('frontend.forms.reefertrucking');
    }
    public function carService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.car-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function bikeService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.bike-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function atvutvService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.atv-utv-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function golfcartService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.golf-cart-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function boatService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.boat-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function excavatorService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.excavator-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function hazmatService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.hazmat-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function dryvanService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.dryvan-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function reeferService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.reefer-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function freightService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.freight-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function farmService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.farm-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function rvService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.rv-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function heavyService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.heavy-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function constructionService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.construction-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function commercialService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.commercial-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function roroService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.roro-service', compact('site_reviews', 'blogs', 'makes'));
    }
    public function nationwideAutotransport()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.nationwide-autotransport', compact('site_reviews', 'blogs', 'makes', 'transports'));
    }
    public function thankYou()
    {
        return view('frontend.pages.thank-you');
    }
    public function getNationWideData($slug)
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $transport = NationWideTransport::with('details')->where('slug', $slug)->first();
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.nationwide-autotransport', compact('site_reviews', 'blogs', 'makes', 'transports', 'transport'));
    }
    public function marketing()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $marketings = Marketing::paginate(10);
        $marketing = Marketing::where('status', 1);

        $vehicle = (clone $marketing)->where('category', 'Vehicle Transport')->get();
        $heavy = (clone $marketing)->where('category', 'Heavy Transport')->get();
        $freight = (clone $marketing)->where('category', 'Freight Transport')->get();
        return view('frontend.pages.marketing.index', compact('makes', 'marketings', 'vehicle', 'heavy', 'freight'));
    }
    // public function vehicleTransportInConnecticut()
    // {
    //     $makes = VehicleName::select('make')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('make')
    //         ->orderBy('make', 'ASC')
    //         ->get();
    //     $site_reviews = ReviewSite::get();
    //     $blogs = Blog::where('status', 1)->take(3)->get();
    //     return view('frontend.pages.marketing.vehicleTransportInConnecticut', compact('site_reviews', 'blogs', 'makes'));
    // }
    // public function vehicleTransportInNewyork()
    // {
    //     $makes = VehicleName::select('make')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('make')
    //         ->orderBy('make', 'ASC')
    //         ->get();
    //     $site_reviews = ReviewSite::get();
    //     $blogs = Blog::where('status', 1)->take(3)->get();
    //     return view('frontend.pages.marketing.vehicleTransportInNewyork', compact('site_reviews', 'blogs', 'makes'));
    // }
    // public function vehicleTransportInHampshire()
    // {
    //     $makes = VehicleName::select('make')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('make')
    //         ->orderBy('make', 'ASC')
    //         ->get();
    //     $site_reviews = ReviewSite::get();
    //     $blogs = Blog::where('status', 1)->take(3)->get();
    //     return view('frontend.pages.marketing.vehicleTransportInHampshire', compact('site_reviews', 'blogs', 'makes'));
    // }
    public function vehicleTransportInConnecticut()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInConnecticut', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInNewyork()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInNewyork', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInHampshire()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInHampshire', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInWashington()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInWashington', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInFlorida()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInFlorida', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInMaryland()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInMaryland', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInVirginia()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInVirginia', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInMichigan()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInMichigan', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInIllinois()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInIllinois', compact('services', 'site_reviews', 'blogs', 'makes'));
    }

    public function vehicleTransportInTexas()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInTexas', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInNorthCarolina()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInNorthCarolina	', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInIndiana()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInIndiana', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInColorado()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInColorado', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportIn()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportIn', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function vehicleTransportInArizona()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $services = Service::where('status', '=', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.marketing.vehicleTransportInArizona', compact('services', 'site_reviews', 'blogs', 'makes'));
    }
    public function showAllMarketingPosts()
    {
        // $marketings = Marketing::latest()->paginate(10);
        $marketings = Marketing::get();
        return view('frontend.marketing.index', compact('marketings'));
    }
    // public function showMarketingPostDetail($slug)
    // {
    //     $site_reviews = ReviewSite::get();
    //     $marketing = Marketing::where('slug', $slug)->firstOrFail();
    //     return view('frontend.marketing.show', compact('marketing', 'site_reviews'));
    // }
    public function leadGeneration(Request $request)
    {
        $data = $request->all();
        // dd($request->all());
        $name = $request->input('name', null);
        $email = $request->input('email', null);
        $phone = $request->input('phone', null);

        $vehicles = [];
        $vehicle_opt = '';

        $year = isset($data['year']) && is_array($data['year'])
            ? $this->generateStringFromArray($data['year'])
            : $request->input('year', null);

        $make = isset($data['make']) && is_array($data['make'])
            ? $this->generateStringFromArray($data['make'])
            : $request->input('make', null);

        $model = isset($data['model']) && is_array($data['model'])
            ? $this->generateStringFromArray($data['model'])
            : $request->input('model', null);

        $condition = isset($data['condition']) && is_array($data['condition'])
            ? $this->generateStringFromArray($data['condition'])
            : $request->input('condition', null);

        $length_ft = isset($data['length_ft']) && is_array($data['length_ft'])
            ? $this->generateStringFromArray($data['length_ft'])
            : $request->input('length_ft', null);

        $length_in = isset($data['length_in']) && is_array($data['length_in'])
            ? $this->generateStringFromArray($data['length_in'])
            : $request->input('length_in', null);

        $width_ft = isset($data['width_ft']) && is_array($data['width_ft'])
            ? $this->generateStringFromArray($data['width_ft'])
            : $request->input('width_ft', null);

        $width_in = isset($data['width_in']) && is_array($data['width_in'])
            ? $this->generateStringFromArray($data['width_in'])
            : $request->input('width_in', null);

        $height_ft = isset($data['height_ft']) && is_array($data['height_ft'])
            ? $this->generateStringFromArray($data['height_ft'])
            : $request->input('height_ft', null);

        $height_in = isset($data['height_in']) && is_array($data['height_in'])
            ? $this->generateStringFromArray($data['height_in'])
            : $request->input('height_in', null);

        $weight = isset($data['weight']) && is_array($data['weight'])
            ? $this->generateStringFromArray($data['weight'])
            : $request->input('weight', null);

        $load_method = isset($data['load_method']) && is_array($data['load_method'])
            ? $this->generateStringFromArray($data['load_method'])
            : $request->input('load_method', null);

        $unload_method = isset($data['unload_method']) && is_array($data['unload_method'])
            ? $this->generateStringFromArray($data['unload_method'])
            : $request->input('unload_method', null);

        $rv_type = isset($data['rv_type']) && is_array($data['rv_type'])
            ? $this->generateStringFromArray($data['rv_type'])
            : $request->input('rv_type', null);

        $category = isset($data['category']) && is_array($data['category'])
            ? $this->generateStringFromArray($data['category'])
            : $request->input('category', null);

        $subcategory = isset($data['subcategory']) && is_array($data['subcategory'])
            ? $this->generateStringFromArray($data['subcategory'])
            : $request->input('subcategory', null);

        // $transport = isset($data['trailer_type']) && is_array($data['trailer_type'])
        //     ? $this->generateStringFromArray($data['trailer_type'])
        //     : $request->input('trailer_type', null);
        // $year = $data['year'][0];
        // $make = $data['make'][0];
        // $model = $data['model'][0];
        $originData = $request->input('From_ZipCode') ?? $request->input('origin');
        $destinationData = $request->input('To_ZipCode') ?? $request->input('destination');
        // $originData = $request->input('From_ZipCode', null);
        // $originData = $request->input('origin', null);
        // $destinationData = $request->input('To_ZipCode', null);
        // $destinationData = $request->input('destination', null);
        $additional = $request->input('add_info', null);
        $transport = $request->input('trailer_type');
        $type = $request->input('trailer_type');
        $shippingdate = $request->input('dates', null);
        $link = $request->input('link', null);
        $modification = $request->input('modification', null);
        $modify_info = $request->input('modify_info', null);
        // $category = $request->input('category', null);
        $boat_on_trailer = $request->input('boat_on_trailer', null);
        // $length_ft = $request->input('length_ft', null);
        // $length_in = $request->input('length_in', null);
        // $width_ft = $request->input('width_ft', null);
        // $width_in = $request->input('width_in', null);
        // $height_ft = $request->input('height_ft', null);
        // // $height_in = $request->input('height_in', null);
        // $weight = $request->input('weight', null);
        // $subcategory = $request->input('subcategory', null);
        $load_type = $request->input('load_type', null);
        // $load_method = $request->input('load_method', null);
        // $unload_method = $request->input('unload_method', null);
        $available_at_auction = $request->input('available_at_auction', null);
        $commodity_detail = $request->input('commodity_detail', null);
        $handling_unit = $request->input('handling_unit', null);
        $commodity_unit = $request->input('commodity_unit', null);
        if ($request->has('trailer_specification') && is_array($request->trailer_specification)) {
            $trailer_specification = implode(',', $request->trailer_specification);
        } else {
            $trailer_specification = $request->input('trailer_specification', null);
        }
        if ($request->has('equipment_type') && is_array($request->equipment_type)) {
            $equipment_type = implode(',', $request->equipment_type);
        } else {
            $equipment_type = $request->input('equipment_type', null);
        }
        $stackable = $request->input('stackable', 0);
        $hazardous = $request->input('hazardous', 0);
        $pick_up_services = $request->input('pick_up_services', null);
        $deliver_services = $request->input('deliver_services', null);
        $ex_pickup_date = $request->input('ex_pickup_date', null);
        $ex_pickup_time = $request->input('ex_pickup_time', null);
        $ex_delivery_date = $request->input('ex_delivery_date', null);
        $ex_delivery_time = $request->input('ex_delivery_time', null);
        $protect_from_freezing = $request->input('protect_from_freezing', 0);
        $sort_segregate = $request->input('sort_segregate', 0);
        $blind_shipment = $request->input('blind_shipment', 0);
        $vehicle_opt = $vehicle_opt;
        $frieght_class = $request->input('frieght_class', null);
        // $rv_type = $request->input('rv_type', null);
        $roro = $request->input('roro', null);
        $heavy_type = $request->input('heavy_type', null);
        $car_type = $request->input('car_type', 1);
        $need_permit = $request->input('need_permit', 0);
        $ip = $request->ip();
        $source = 'ShipA1';
        $price_giver_allow = 1;

        $originValues = explode(',', $originData);
        $origin_zip = isset($originValues[2]) ? trim($originValues[2]) : null;
        $origin_city = isset($originValues[0]) ? trim($originValues[0]) : null;
        $origin_state = isset($originValues[1]) ? trim($originValues[1]) : null;

        if ($roro == null) {
            $destinationValues = explode(',', $destinationData);
            $destination_zip = isset($destinationValues[2]) ? trim($destinationValues[2]) : null;
            $destination_city = isset($destinationValues[0]) ? trim($destinationValues[0]) : null;
            $destination_state = isset($destinationValues[1]) ? trim($destinationValues[1]) : null;
        } else {
            $destination_zip = $request->input('From_ZipCode', null);
            $destination_city = $request->input('To_City', null);
            $destination_state = $request->input('To_Country', null);
        }

        $client = new Client();
        try {
            $response = $client->get("http://ipinfo.io/{$ip}/json");
            $ip_details = json_decode($response->getBody());
            $ipcity = $ip_details ? $ip_details->city : null;
            $ipregion = $ip_details ? $ip_details->region : null;
            $ipcountry = $ip_details ? $ip_details->country : null;
            $iploc = $ip_details ? $ip_details->loc : null;
            $ippostal = $ip_details ? $ip_details->postal : null;
        } catch (\Exception $e) {
            $ipcity = null;
            $ipregion = null;
            $ipcountry = null;
            $iploc = null;
            $ippostal = null;
        }
        $distance = 0;
        if (is_null($roro)) {
            $delivery_latitude = $originData;
            $delivery_longitude = $destinationData;
            if ($origin_zip || $destination_zip) {
                $distance = QuoteController::getDistance($origin_zip, $destination_zip);
            }
        } else {
            $destinationData = $request->To_Country . ',' . $request->To_City . ',' . $request->To_ZipCode;
        }

        $post_array = [
            'appkey' => '0EO9KCH9NNI46HH60WOL5OW4TE0GCD6Y',
            'domain' => 'https://shawntransport.com',
            'product_url' => 'https://shipa1.com',
            'oname' => $name,
            'oemail' => $email,
            'ophone' => $phone,
            'vehicles' => $vehicles,
            'condition' => $condition,
            'originzsc' => $originData,
            'destinationzsc' => $destinationData,
            'add_info' => $additional,
            'transport' => $transport,
            'shippingdate' => $shippingdate,
            'car_type' => $car_type,
            'paneltype' => 3,
            'cname' => $name,
            'cemail' => $email,
            'main_ph' => $phone,
            'ip' => $ip,
            'ipcity' => $ipcity,
            'ipregion' => $ipregion,
            'ipcountry' => $ipcountry,
            'iploc' => $iploc,
            'ippostal' => $ippostal,
            'link' => $link,
            'modification' => $modification,
            'modify_info' => $modify_info,
            'category' => $category,
            'boat_on_trailer' => $boat_on_trailer,
            'length_ft' => $length_ft,
            'length_in' => $length_in,
            'width_ft' => $width_ft,
            'width_in' => $width_in,
            'height_ft' => $height_ft,
            'height_in' => $height_in,
            'weight' => $weight,
            'subcategory' => $subcategory,
            'load_type' => $load_type,
            'load_method' => $load_method,
            'unload_method' => $unload_method,
            'available_at_auction' => $available_at_auction,
            'commodity_detail' => $commodity_detail,
            'handling_unit' => $handling_unit,
            'commodity_unit' => $commodity_unit,
            'trailer_specification' => $trailer_specification,
            'equipment_type' => $equipment_type,
            'stackable' => $stackable,
            'hazardous' => $hazardous,
            'pick_up_services' => $pick_up_services,
            'deliver_services' => $deliver_services,
            'ex_pickup_date' => $ex_pickup_date,
            'ex_pickup_time' => $ex_pickup_time,
            'ex_delivery_date' => $ex_delivery_date,
            'ex_delivery_time' => $ex_delivery_time,
            'protect_from_freezing' => $protect_from_freezing,
            'sort_segregate' => $sort_segregate,
            'blind_shipment' => $blind_shipment,
            'vehicle_opt' => $vehicle_opt,
            'originzip' => $origin_zip,
            'originstate' => $origin_state,
            'origincity' => $origin_city,
            'destinationzip' => $destination_zip,
            'destinationstate' => $destination_state,
            'destinationcity' => $destination_city,
            'year' => $year,
            'make' => $make,
            'model' => $model,
            'frieght_class' => $frieght_class,
            'rv_type' => $rv_type,
            'type' => $type,
            'source' => 'ShipA1',
            'roro' => $roro,
            'heavy_type' => $heavy_type,
            'price_giver_allow' => $price_giver_allow,
            'need_permit' => $need_permit,
        ];

        if ($request->hasFile('image')) {
            $uploadedImages = $request->file('image');
            $imageUrls = [];

            foreach ($uploadedImages as $image) {
                $imagePath = $this->uploadImage('quoteForm', $image);
                $imageUrl = 'https://shipa1.com/' . $imagePath;
                $imageUrls[] = $imageUrl;
            }

            $post_array['image'] = implode('*^', $imageUrls);
        }

        try {
            $response = Http::post('https://washington.shawntransport.com/api/v2/submit_query', $post_array)->json();
            if (isset($response['status_code']) && $response['status_code'] == 201) {
                return view('frontend.pages.thank-you');
            } else {
                return back()->with('error', 'An error occurred while creating the quote. Please try again later.');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            // \Log::error($e->getMessage());

            return back()->with('error', 'An error occurred while creating the quote. Please try again later.');
        }
    }
    private function generateStringFromArray($array)
    {
        return count($array) > 1 ? implode('*^', $array) : $array[0];
    }
}
