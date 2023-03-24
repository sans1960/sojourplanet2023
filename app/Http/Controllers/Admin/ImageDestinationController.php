<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ImageDestination\StoreRequest;
use App\Http\Requests\ImageDestination\UpdateRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Destination;
use App\Models\ImageDestination;

class ImageDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $imagedestinations = ImageDestination::all();
        return response()->view('admin.imagesdestinations.index',compact('imagedestinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $destinations = Destination::all();
        return response()->view('admin.imagesdestinations.create',compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/imagesdestinations/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = ImageDestination::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Image Destination created successfully!');
            return redirect()->route('admin.imagedestinations.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageDestination $imagedestination):Response
    {
        return response()->view('admin.imagesdestinations.show',compact('imagedestination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageDestination $imagedestination):Response
    {
        $destinations = Destination::all();
        return response()->view('admin.imagesdestinations.edit',compact('imagedestination','destinations'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ImageDestination $imagedestination):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($imagedestination->image);

            $filePath = Storage::disk('public')->put('images/imagesdestinations/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $imagedestination->update($validated);

        if($update) {
            session()->flash('notif.success', 'Image  Destination updated successfully!');
            return redirect()->route('admin.imagedestinations.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageDestination $imagedestination):RedirectResponse
    {
        Storage::disk('public')->delete($imagedestination->image);
        $delete = $imagedestination->delete();

        if($delete) {
            session()->flash('notif.success', 'Image Destination deleted successfully!');
            return redirect()->route('admin.imagedestinations.index');
        }

        return abort(500);
    }
}
