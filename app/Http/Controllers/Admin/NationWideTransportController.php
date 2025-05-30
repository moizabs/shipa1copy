<?php

namespace App\Http\Controllers\Admin;

use App\Models\NationWideTransport;
use App\Models\NationWideTransportDetail;
use App\Helpers\SlugHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NationWideTransportController extends Controller
{
    public function index()
    {
        $transports = NationWideTransport::with('details')->get();
        return view('dashboard.admin.nationWide.index', compact('transports'));
    }

    public function create()
    {
        return view('dashboard.admin.nationWide.create');
    }

    public function store(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|integer',
            'category' => 'required',
            'details' => 'required|array',
            'details.*.heading' => 'required|string|max:255',
            'details.*.description' => 'required|string',
            'details.*.image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $slug = SlugHelper::createUniqueSlug($request->name);

        $nationWideTransport = NationWideTransport::create([
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
            'category' => $request->category,
        ]);

        foreach ($request->details as $detail) {
            $imagePath = null;

            if (isset($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                $image = $detail['image'];
                $imageName = time() . '-' . $image->getClientOriginalName();

                // Save the image to the 'nationWide' folder in the storage
                $imagePath = $image->move(public_path('nationWide'), $imageName);

                // Generate the complete URL for the stored image
                $imagePath = url('nationWide/' . $imageName);
            }

            // Create a new detail with the image URL
            $nationWideTransport->details()->create([
                'heading' => $detail['heading'],
                'description' => $detail['description'],
                'image' => $imagePath,
            ]);
        }

        return redirect()->route('nationwide-transports.index')
            ->with('success', 'NationWideTransport and details created successfully');
    }

    public function show($id)
    {
        $nationWideTransport = NationWideTransport::with('details')->findOrFail($id);
        return view('dashboard.admin.nationWide.show', compact('nationWideTransport'));
    }

    public function edit($id)
    {
        $nationWideTransport = NationWideTransport::with('details')->findOrFail($id);
        return view('dashboard.admin.nationWide.edit', compact('nationWideTransport'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->toArray());
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|integer',
            'category' => 'required',
            'details' => 'required|array',
            'details.*.heading' => 'required|string|max:255',
            'details.*.description' => 'required|string',
            'details.*.image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $nationWideTransport = NationWideTransport::findOrFail($id);

        if ($nationWideTransport->name !== $request->name) {
            $slug = SlugHelper::createUniqueSlug($request->name);
            $nationWideTransport->slug = $slug;
        }

        $nationWideTransport->update([
            'name' => $request->name,
            'category' => $request->category,
            'status' => $request->status,
        ]);

        $existingDetails = $nationWideTransport->details->keyBy('id');

        foreach ($request->details as $index => $detail) {
            $existingDetail = $existingDetails->get($detail['id']);
            $imagePath = $existingDetail ? $existingDetail->image : null;

            if (isset($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                $image = $detail['image'];
                $imageName = time() . '-' . $image->getClientOriginalName();

                // Save the image to the 'nationWide' folder in the storage
                $imagePath = $image->move(public_path('nationWide'), $imageName);

                // Generate the complete URL for the stored image
                $imagePath = url('nationWide/' . $imageName);
            }

            if ($existingDetail) {
                $existingDetail->update([
                    'heading' => $detail['heading'],
                    'description' => $detail['description'],
                    'image' => $imagePath,
                ]);
            } else {
                $nationWideTransport->details()->create([
                    'heading' => $detail['heading'],
                    'description' => $detail['description'],
                    'image' => $imagePath,
                ]);
            }
        }

        $idsInRequest = collect($request->details)->pluck('id')->filter();
        $idsInDatabase = $existingDetails->keys();
        $idsToDelete = $idsInDatabase->diff($idsInRequest);

        foreach ($idsToDelete as $id) {
            $existingDetails->get($id)->delete();
        }

        return redirect()->route('nationwide-transports.index')
            ->with('success', 'NationWideTransport and details updated successfully');
    }

    public function destroy($id)
    {
        $nationWideTransport = NationWideTransport::findOrFail($id);
        $nationWideTransport->details()->delete();
        $nationWideTransport->delete();

        return redirect()->route('nationwide-transports.index')
            ->with('success', 'NationWideTransport and details deleted successfully');
    }
}
