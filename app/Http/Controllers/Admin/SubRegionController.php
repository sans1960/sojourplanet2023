<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Destination;
use App\Http\Requests\SubRegion\StoreRequest;
use App\Http\Requests\SubRegion\UpdateRequest;
use App\Models\SubRegion;

class SubRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $subregions = SubRegion::all();
        return response()->view('admin.subregions.index',compact('subregions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $destinations = Destination::all();
        return response()->view('admin.subregions.create',compact('destinations'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $create = SubRegion::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Subregion created successfully!');
            return redirect()->route('admin.subregions.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubRegion $subregion):Response
    {
        return response()->view('admin.subregions.show',compact('subregion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubRegion $subregion):Response
    {
        $destinations = Destination::all();
        return response()->view('admin.subregions.edit',compact('destinations','subregion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, SubRegion $subregion):RedirectResponse
    {
        $validated = $request->validated();
        $update = $subregion->update($validated);

        if($update) {
            session()->flash('notif.success', 'Subregion updated successfully!');
            return redirect()->route('admin.subregions.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubRegion $subregion):RedirectResponse
    {
        $delete = $subregion->delete();

        if($delete) {
            session()->flash('notif.success', 'Subregion deleted successfully!');
            return redirect()->route('admin.subregions.index');
        }

        return abort(500);
    }
}
