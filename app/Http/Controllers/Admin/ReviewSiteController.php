<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReviewSite;
use Carbon\Carbon;

class ReviewSiteController extends Controller
{
    public function index()
    {
        $site_reviews = ReviewSite::all();
        return view('dashboard.admin.site_reviews.index', compact('site_reviews'));
    }

    public function create()
    {
        return view('dashboard.admin.site_reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric',
            'profile_name' => 'required|string',
            'description' => 'nullable',
            'user' => 'nullable',
            // 'date' => 'required|date',
        ]);

        $date = Carbon::parse($request->date)->format('Y-m-d');

        ReviewSite::create([
            'rating' => $request->input('rating'),
            'profile_name' => $request->input('profile_name'),
            'description' => $request->input('description'),
            'user' => $request->input('user'),
            'date' => $date,
        ]);

        return redirect()->route('site_review.index')->with('success', 'Site Review created successfully.');
    }

    public function edit($id)
    {
        $site_review = ReviewSite::findOrFail($id);
        return view('dashboard.admin.site_reviews.edit', compact('site_review'));
    }

    public function update(Request $request, $id)
    {
        $date = Carbon::parse($request->date);

        $request->validate([
            'rating' => 'required|numeric',
            'profile_name' => 'required|string',
            'rating_url' => 'required|string',
            'description' => 'nullable',
            'user' => 'nullable',
        ]);

        $site_review = ReviewSite::findOrFail($id);

        $site_review->update([
            'rating' => $request->input('rating'),
            'profile_name' => $request->input('profile_name'),
            'rating_url' => $request->input('rating_url'),
            'description' => $request->input('description'),
            'user' => $request->input('user'),
            'date' => $date->format('Y-m-d'),
        ]);

        return redirect()->route('site_review.index')->with('success', 'Site Review updated successfully.');
    }

    public function destroy($id)
    {
        $site_review = ReviewSite::findOrFail($id);
        $site_review->delete();

        return redirect()->back()->with('success', 'Site Review deleted successfully.');
    }
}
