<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Tour;
use App\Models\LocationTour;
use App\Http\Requests\LocationTour\StoreRequest;
use App\Http\Requests\LocationTour\UpdateRequest;
use Illuminate\Http\RedirectResponse;

class LocationTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $locationtours = LocationTour::paginate(20);
        return response()->view('admin.locationtours.index',compact('locationtours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $tours = Tour::all();
        return response()->view('admin.locationtours.create',compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        $create = LocationTour::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Location Tour created successfully!');
            return redirect()->route('admin.locationtours.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(LocationTour $locationtour):Response
    {
        return response()->view('admin.locationtours.show',compact('locationtour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocationTour $locationtour):Response
    {
        $tours = Tour::all();
        return response()->view('admin.locationtours.edit',compact('locationtour','tours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, LocationTour $locationtour):RedirectResponse
    {
        $validated = $request->validated();

     

        $update = $locationtour->update($validated);

        if($update) {
            session()->flash('notif.success', 'Location Tour updated successfully!');
            return redirect()->route('admin.locationtours.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocationTour $locationtour):RedirectResponse
    {
        $delete = $locationtour->delete();

        if($delete) {
            session()->flash('notif.success', 'Location Tour deleted successfully!');
            return redirect()->route('admin.locationtours.index');
        }

        return abort(500);
    }
}
