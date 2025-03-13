<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\ReviewSite;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->get();
        return view('dashboard.admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::get();
        return view('dashboard.admin.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'heading_one' => 'nullable|string|max:255',
            'desc_one' => 'nullable|string',
            'heading_two' => 'nullable|string|max:255',
            'desc_two_one' => 'nullable|string',
            'desc_two_two' => 'nullable|string',
            'desc_two_three' => 'nullable|string',
            'desc_two_four' => 'nullable|string',
            'desc_two_five' => 'nullable|string',
            'desc_two_six' => 'nullable|string',
            'extra' => 'nullable|string',
            'status' => 'required|boolean',
            'category_id' => 'required',
            'name' => 'required',
            'display_name' => 'required',
            'text_to_show' => 'nullable',
            'heading_three' => 'nullable',
            'desc_three' => 'nullable',
            'heading_four' => 'nullable',
            'desc_four' => 'nullable',
            'heading_five' => 'nullable',
            'heading_six' => 'nullable',
            'desc_six' => 'nullable',
            'heading_seven' => 'nullable',
            'desc_seven' => 'nullable',
            'heading_eight' => 'nullable',
            'desc_eight' => 'nullable',
            'faq_image' => 'nullable',
            'faq_q1' => 'nullable',
            'ans_faq1' => 'nullable',
            'faq_q2' => 'nullable',
            'ans_faq2' => 'nullable',
            'faq_q3' => 'nullable',
            'ans_faq3' => 'nullable',
        ]);

        $slug = Str::slug($request->name);
        $slug = $this->generateUniqueSlug($slug);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store uploaded files in the public directory
        $bannerImage = $request->file('banner_image');
        $bannerImage->move(public_path('uploads'), $bannerImage->getClientOriginalName());

        $image2 = $request->file('image2');
        if ($image2) {
            $image2->move(public_path('uploads'), $image2->getClientOriginalName());
        }

        $image3 = $request->file('image3');
        if ($image3) {
            $image3->move(public_path('uploads'), $image3->getClientOriginalName());
        }

        $faq_image = $request->file('faq_image');
        if ($faq_image) {
            $faq_image->move(public_path('uploads'), $faq_image->getClientOriginalName());
        }

        $service = new Service;

        $service->heading_one = $request->filled('heading_one') ? $request->heading_one : null;
        $service->desc_one = $request->filled('desc_one') ? $request->desc_one : null;
        $service->heading_two = $request->filled('heading_two') ? $request->heading_two : null;
        $service->desc_two_one = $request->filled('desc_two_one') ? $request->desc_two_one : null;
        $service->desc_two_two = $request->filled('desc_two_two') ? $request->desc_two_two : null;
        $service->desc_two_three = $request->filled('desc_two_three') ? $request->desc_two_three : null;
        $service->desc_two_four = $request->filled('desc_two_four') ? $request->desc_two_four : null;
        $service->desc_two_five = $request->filled('desc_two_five') ? $request->desc_two_five : null;
        $service->desc_two_six = $request->filled('desc_two_six') ? $request->desc_two_six : null;
        $service->extra = $request->filled('extra') ? $request->extra : null;
        $service->category_id = $request->filled('category_id') ? $request->category_id : null;
        $service->status = $request->filled('status') ? $request->status : null;
        $service->slug = $slug;
        $service->name = $request->filled('name') ? $request->name : null;
        $service->display_name = $request->filled('display_name') ? $request->display_name : null;
        $service->text_to_show = $request->filled('text_to_show') ? $request->text_to_show : null;
        $service->heading_three = $request->filled('heading_three') ? $request->heading_three : null;
        $service->desc_three = $request->filled('desc_three') ? $request->desc_three : null;
        $service->heading_four = $request->filled('heading_four') ? $request->heading_four : null;
        $service->desc_four = $request->filled('desc_four') ? $request->desc_four : null;
        $service->heading_five = $request->filled('heading_five') ? $request->heading_five : null;
        $service->heading_six = $request->filled('heading_six') ? $request->heading_six : null;
        $service->desc_six = $request->filled('desc_six') ? $request->desc_six : null;
        $service->heading_seven = $request->filled('heading_seven') ? $request->heading_seven : null;
        $service->desc_seven = $request->filled('desc_seven') ? $request->desc_seven : null;
        $service->heading_eight = $request->filled('heading_eight') ? $request->heading_eight : null;
        $service->desc_eight = $request->filled('desc_eight') ? $request->desc_eight : null;
        $service->faq_image = $request->filled('faq_image') ? $request->faq_image : null;
        $service->faq_q1 = $request->filled('faq_q1') ? $request->faq_q1 : null;
        $service->ans_faq1 = $request->filled('ans_faq1') ? $request->ans_faq1 : null;
        $service->faq_q2 = $request->filled('faq_q2') ? $request->faq_q2 : null;
        $service->ans_faq2 = $request->filled('ans_faq2') ? $request->ans_faq2 : null;
        $service->faq_q3 = $request->filled('faq_q3') ? $request->faq_q3 : null;
        $service->ans_faq3 = $request->filled('ans_faq3') ? $request->ans_faq3 : null;
        $service->layout_type = $request->filled('layout_type') ? $request->layout_type : 'old';

        $service->banner_image = '/uploads/' . $bannerImage->getClientOriginalName();
        if ($image2) {
            $service->image2 = '/uploads/' . $image2->getClientOriginalName();
        }
        if ($image3) {
            $service->image3 = '/uploads/' . $image3->getClientOriginalName();
        }
        if ($faq_image) {
            $service->faq_image = '/uploads/' . $faq_image->getClientOriginalName();
        }

        // dd($request->toArray(), $service->toArray());

        // Save the service
        $service->save();

        // Redirect back with success message
        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $categories = ServiceCategory::get();
        $service = Service::find($id);
        if ($service->layout_type == 'new') {
            return view('dashboard.admin.services.new_layout.edit', compact('service', 'categories'));
        }
        if ($service->layout_type == 'new2') {
            return view('dashboard.admin.services.new_layout.edit2', compact('service', 'categories'));
        }
        else {
            return view('dashboard.admin.services.edit', compact('service', 'categories'));
        }
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'heading_one' => 'nullable|string|max:255',
            'desc_one' => 'nullable|string',
            'heading_two' => 'nullable|string|max:255',
            'desc_two_one' => 'nullable|string',
            'desc_two_two' => 'nullable|string',
            'desc_two_three' => 'nullable|string',
            'desc_two_four' => 'nullable|string',
            'desc_two_five' => 'nullable|string',
            'desc_two_six' => 'nullable|string',
            'extra' => 'nullable|string',
            'status' => 'required|boolean',
            'category_id' => 'required',
            'name' => 'required',
            'display_name' => 'required',
            'text_to_show' => 'nullable',
            'heading_three' => 'nullable',
            'desc_three' => 'nullable',
            'heading_four' => 'nullable',
            'desc_four' => 'nullable',
            'heading_five' => 'nullable',
            'heading_six' => 'nullable',
            'desc_six' => 'nullable',
            'heading_seven' => 'nullable',
            'desc_seven' => 'nullable',
            'heading_eight' => 'nullable',
            'desc_eight' => 'nullable',
            'faq_image' => 'nullable',
            'faq_q1' => 'nullable',
            'ans_faq1' => 'nullable',
            'faq_q2' => 'nullable',
            'ans_faq2' => 'nullable',
            'faq_q3' => 'nullable',
            'ans_faq3' => 'nullable',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the service by id
        $service = Service::findOrFail($id);

        $slug = Str::slug($request->name);
        $slug = $this->generateUniqueSlug($slug, $service->id);

        // Update the service attributes
        $service->heading_one = $request->filled('heading_one') ? $request->heading_one : null;
        $service->desc_one = $request->filled('desc_one') ? $request->desc_one : null;
        $service->heading_two = $request->filled('heading_two') ? $request->heading_two : null;
        $service->desc_two_one = $request->filled('desc_two_one') ? $request->desc_two_one : null;
        $service->desc_two_two = $request->filled('desc_two_two') ? $request->desc_two_two : null;
        $service->desc_two_three = $request->filled('desc_two_three') ? $request->desc_two_three : null;
        $service->desc_two_four = $request->filled('desc_two_four') ? $request->desc_two_four : null;
        $service->desc_two_five = $request->filled('desc_two_five') ? $request->desc_two_five : null;
        $service->desc_two_six = $request->filled('desc_two_six') ? $request->desc_two_six : null;
        $service->extra = $request->filled('extra') ? $request->extra : null;
        $service->category_id = $request->filled('category_id') ? $request->category_id : null;
        $service->status = $request->filled('status') ? $request->status : null;
        $service->slug = $slug;
        $service->name = $request->filled('name') ? $request->name : null;
        $service->display_name = $request->filled('display_name') ? $request->display_name : null;
        $service->text_to_show = $request->filled('text_to_show') ? $request->text_to_show : null;
        $service->heading_three = $request->filled('heading_three') ? $request->heading_three : null;
        $service->desc_three = $request->filled('desc_three') ? $request->desc_three : null;
        $service->heading_four = $request->filled('heading_four') ? $request->heading_four : null;
        $service->desc_four = $request->filled('desc_four') ? $request->desc_four : null;
        $service->heading_five = $request->filled('heading_five') ? $request->heading_five : null;
        $service->heading_six = $request->filled('heading_six') ? $request->heading_six : null;
        $service->desc_six = $request->filled('desc_six') ? $request->desc_six : null;
        $service->heading_seven = $request->filled('heading_seven') ? $request->heading_seven : null;
        $service->desc_seven = $request->filled('desc_seven') ? $request->desc_seven : null;
        $service->heading_eight = $request->filled('heading_eight') ? $request->heading_eight : null;
        $service->desc_eight = $request->filled('desc_eight') ? $request->desc_eight : null;
        $service->faq_q1 = $request->filled('faq_q1') ? $request->faq_q1 : null;
        $service->ans_faq1 = $request->filled('ans_faq1') ? $request->ans_faq1 : null;
        $service->faq_q2 = $request->filled('faq_q2') ? $request->faq_q2 : null;
        $service->ans_faq2 = $request->filled('ans_faq2') ? $request->ans_faq2 : null;
        $service->faq_q3 = $request->filled('faq_q3') ? $request->faq_q3 : null;
        $service->ans_faq3 = $request->filled('ans_faq3') ? $request->ans_faq3 : null;
        $service->layout_type = $request->filled('layout_type') ? $request->layout_type : 'old';

        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImage->move(public_path('uploads'), $bannerImage->getClientOriginalName());
            $service->banner_image = '/uploads/' . $bannerImage->getClientOriginalName();
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2->move(public_path('uploads'), $image2->getClientOriginalName());
            $service->image2 = '/uploads/' . $image2->getClientOriginalName();
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3->move(public_path('uploads'), $image3->getClientOriginalName());
            $service->image3 = '/uploads/' . $image3->getClientOriginalName();
        }

        if ($request->hasFile('faq_image')) {
            $faqImage = $request->file('faq_image');
            $faqImage->move(public_path('uploads'), $faqImage->getClientOriginalName());
            $service->faq_image = '/uploads/' . $faqImage->getClientOriginalName();
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Service::findOrFail($id);
        $blog->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    private function generateUniqueSlug($slug, $id = null)
    {
        $newSlug = $slug;
        $counter = 1;

        while (Service::withTrashed()->where('slug', $newSlug)->where('id', '!=', $id)->exists()) {
            $newSlug = $slug . $counter;
            $counter++;
        }

        return $newSlug;
    }

    public function new_layout()
    {
        $categories = ServiceCategory::get();
        return view('dashboard.admin.services.new_layout.create', compact('categories'));
    }

    public function new_layout2()
    {
        $categories = ServiceCategory::get();
        return view('dashboard.admin.services.new_layout.create2', compact('categories'));
    }
}
