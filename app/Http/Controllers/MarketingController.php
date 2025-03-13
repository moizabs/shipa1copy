<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketing;
use App\Models\ReviewSite;
use App\Models\Review;
use App\Models\Blog;
use App\Models\VehicleName;

class MarketingController extends Controller
{
    public function index()
    {
        $marketings = Marketing::latest()->paginate(10);
        $marketing = Marketing::get();
        return view('dashboard.admin.marketing.index', compact('marketing','marketings'));
    }

    public function create()
    {
        return view('dashboard.admin.marketing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:marketing',
            'img_thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_two' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_three' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required',
            'desc_one' => 'required',
            'heading_two' => 'nullable',
            'desc_two' => 'nullable',
            'heading_three' => 'nullable',
            'desc_three' => 'nullable',
            'category' => 'required',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        // if ($request->hasFile('img_one')) {
        //     $data['img_one'] = $request->file('img_one')->store('uploads/marketing', 'public');
        // }
        // if ($request->hasFile('img_two')) {
        //     $data['img_two'] = $request->file('img_two')->store('uploads/marketing', 'public');
        // }
        // if ($request->hasFile('img_three')) {
        //     $data['img_three'] = $request->file('img_three')->store('uploads/marketing', 'public');
        // }

        if ($request->hasFile(key: 'img_thumbnail')) {
            $image = $request->file('img_thumbnail');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), name: $imageName);
            $data['img_thumbnail'] = 'public/marketing/' . $imageName;
        }

        if ($request->hasFile(key: 'img_one')) {
            $image = $request->file('img_one');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), name: $imageName);
            $data['img_one'] = 'public/marketing/' . $imageName;
        }

        if ($request->hasFile(key: 'img_two')) {
            $image = $request->file('img_two');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), $imageName);
            $data['img_two'] = 'public/marketing/' . $imageName;
        }

        if ($request->hasFile(key: 'img_three')) {
            $image = $request->file('img_three');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), $imageName);
            $data['img_three'] = 'public/marketing/' . $imageName;
        }

        Marketing::create($data);

        return redirect()->route('marketing.index')->with('success', 'Marketing post created successfully.');
    }

    public function preview($slug)
    {
        $marketing = Marketing::where('slug', $slug)->firstOrFail();
        $marketings = Marketing::get();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $blogs = Blog::where('status', 1)->take(3)->get(['id', 'post_name', 'slug_name', 'post_image', 'post_description']);
        $reviews = Review::all();
        $site_reviews = ReviewSite::all();

        return view('frontend.pages.marketing.show', compact('marketings','marketing', 'reviews', 'blogs', 'makes', 'site_reviews'));
    }

    public function edit(Marketing $marketing)
    {
        return view('dashboard.admin.marketing.edit', compact('marketing'));
    }

    public function update(Request $request, Marketing $marketing)
    {
        $request->validate([
            'slug' => 'required|unique:marketing,slug,' . $marketing->id,
            'img_thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_two' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_three' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required',
            'desc_one' => 'required',
            'heading_two' => 'nullable',
            'desc_two' => 'nullable',
            'heading_three' => 'nullable',
            'desc_three' => 'nullable',
            'category' => 'required',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        // if ($request->hasFile('img_one')) {
        //     $data['img_one'] = $request->file('img_one')->store('uploads/marketing', 'public');
        // }
        // if ($request->hasFile('img_two')) {
        //     $data['img_two'] = $request->file('img_two')->store('uploads/marketing', 'public');
        // }
        // if ($request->hasFile('img_three')) {
        //     $data['img_three'] = $request->file('img_three')->store('uploads/marketing', 'public');
        // }
        if ($request->hasFile(key: 'img_thumbnail')) {
            $image = $request->file('img_thumbnail');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), name: $imageName);
            $data['img_thumbnail'] = 'public/marketing/' . $imageName;
        }
        if ($request->hasFile(key: 'img_one')) {
            $image = $request->file('img_one');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), name: $imageName);
            $data['img_one'] = 'public/marketing/' . $imageName;
        }

        if ($request->hasFile(key: 'img_two')) {
            $image = $request->file('img_two');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), $imageName);
            $data['img_two'] = 'public/marketing/' . $imageName;
        }

        if ($request->hasFile(key: 'img_three')) {
            $image = $request->file('img_three');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('marketing'), $imageName);
            $data['img_three'] = 'public/marketing/' . $imageName;
        }

        $marketing->update($data);

        return redirect()->route('marketing.index')->with('success', 'Marketing post updated successfully.');
    }

    public function destroy(Marketing $marketing)
    {
        $marketing->delete();
        return redirect()->route('marketing.index')->with('success', 'Marketing post deleted successfully.');
    }
}
