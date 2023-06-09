<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Destination;
use App\Http\Requests\Destination\StoreRequest;
use App\Http\Requests\Destination\UpdateRequest;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $destinations = Destination::paginate(10);
        return response()->view('admin.destinations.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        return response()->view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/destinations/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Destination::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Destination created successfully!');
            return redirect()->route('admin.destinations.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination):Response
    {
        return response()->view('admin.destinations.show',compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination):Response
    {
        return response()->view('admin.destinations.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Destination $destination): RedirectResponse
    {

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($destination->image);

            $filePath = Storage::disk('public')->put('images/destinations/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $destination->update($validated);

        if($update) {
            session()->flash('notif.success', 'Destination updated successfully!');
            return redirect()->route('admin.destinations.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination): RedirectResponse
    {
        Storage::disk('public')->delete($destination->image);
        $delete = $destination->delete();

        if($delete) {
            session()->flash('notif.success', 'Destination deleted successfully!');
            return redirect()->route('admin.destinations.index');
        }

        return abort(500);
    }
}
