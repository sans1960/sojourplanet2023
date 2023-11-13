<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\StoreRequest;
use App\Http\Requests\Location\UpdateRequest;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::paginate(12);
        return response()->view('admin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $countries = Country::all();
        $destinations = Destination::all();
        return response()->view('admin.locations.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/locations/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Location::create($validated);

        if ($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Location created successfully!');
            return redirect()->route('admin.locations.index');
        }

        // return abort(500);
        if ($validated->fails()) {
            return back()->withErrors($validated);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('admin.locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        $destinations = Destination::all();
        return view('admin.locations.edit', compact('location', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Location $location)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($location->image);

            $filePath = Storage::disk('public')->put('images/locations/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $location->update($validated);

        if ($update) {
            session()->flash('notif.success', 'Location updated successfully!');
            return redirect()->route('admin.locations.index');
        }

        // return abort(500);
        if ($validated->fails()) {
            return back()->withErrors($validated);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        Storage::disk('public')->delete($location->image);
        $delete = $location->delete();

        if ($delete) {
            session()->flash('notif.success', 'Location deleted successfully!');
            return redirect()->route('admin.locations.index');
        }

        return abort(500);
    }
}
