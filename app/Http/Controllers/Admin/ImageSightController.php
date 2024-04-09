<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Models\ImageSight;
use App\Models\Sight;
use App\Http\Requests\ImageSight\StoreRequest;
use App\Http\Requests\ImageSight\UpdateRequest;

class ImageSightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $imagesights = ImageSight::paginate(20);
        return response()->view('admin.imagesights.index', compact('imagesights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $sights = Sight::all();
        return response()->view('admin.imagesights.create', compact('sights'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/imagesights/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = ImageSight::create($validated);

        if ($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Image Sight created successfully!');
            return redirect()->route('admin.imagesights.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageSight $imagesight): Response
    {
        return response()->view('admin.imagesights.show', compact('imagesight'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageSight $imagesight): Response
    {
        $sights = Sight::all();
        return response()->view('admin.imagesights.edit', compact('imagesight', 'sights'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ImageSight $imagesight): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($imagesight->image);

            $filePath = Storage::disk('public')->put('images/imagesights/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $imagesight->update($validated);

        if ($update) {
            session()->flash('notif.success', 'Image  Sight updated successfully!');
            return redirect()->route('admin.imagesights.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageSight $imagesight): RedirectResponse
    {
        Storage::disk('public')->delete($imagesight->image);
        $delete = $imagesight->delete();

        if ($delete) {
            session()->flash('notif.success', 'Image Sight deleted successfully!');
            return redirect()->route('admin.imagesights.index');
        }

        return abort(500);
    }
    public function findImageSight()
    {
        return view('admin.imagesights.search');
    }
    public function searchImageSight(Request $request)
    {
        $search = $request->input('search');
        $imagesights = ImageSight::where('sight_id', $search)->get();
        return view('admin.imagesights.search', compact('imagesights'));
    }
}
