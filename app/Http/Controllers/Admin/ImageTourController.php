<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ImageTour\StoreRequest;
use App\Http\Requests\ImageTour\UpdateRequest;
use App\Models\ImageTour;
use App\Models\Tour;
use Illuminate\Http\RedirectResponse;

class ImageTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $imagestours = ImageTour::paginate(20);
        return response()->view('admin.imagestours.index',compact('imagestours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $tours = Tour::all();
        return response()->view('admin.imagestours.create',compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
         $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/imagestours/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = ImageTour::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Image Tour created successfully!');
            return redirect()->route('admin.imagestours.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageTour $imagestour):Response
    {
         return response()->view('admin.imagestours.show',compact('imagestour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageTour $imagestour):Response
    {
        $tours = Tour::all();
         return response()->view('admin.imagestours.edit',compact('imagestour','tours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ImageTour $imagestour):RedirectResponse
    {
         $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($imagestour->image);

            $filePath = Storage::disk('public')->put('images/imagestours/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $imagestour->update($validated);

        if($update) {
            session()->flash('notif.success', 'Image  Tour updated successfully!');
            return redirect()->route('admin.imagestours.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageTour $imagestour):RedirectResponse
    {
         Storage::disk('public')->delete($imagestour->image);
        $delete = $imagestour->delete();

        if($delete) {
            session()->flash('notif.success', 'Image Tour deleted successfully!');
            return redirect()->route('admin.imagestours.index');
        }

        return abort(500);
    }
}
