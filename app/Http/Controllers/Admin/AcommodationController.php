<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acommodation\StoreRequest;
use App\Http\Requests\Acommodation\UpdateRequest;
use App\Models\Acommodation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;

class AcommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acomodations = Acommodation::paginate(12);
        return response()->view('admin.acomodations.index', compact('acomodations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinations = Destination::all();
        return response()->view('admin.acomodations.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/acomodations/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Acommodation::create($validated);

        if ($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Acommodation created successfully!');
            return redirect()->route('admin.acomodations.index');
        }

        // return abort(500);
        if ($validated->fails()) {
            return back()->withErrors($validated);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Acommodation $acomodation)
    {
        return response()->view('admin.acomodations.show', compact('acomodation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acommodation $acomodation)
    {
        $destinations = Destination::all();
        return response()->view('admin.acomodations.edit', compact('destinations', 'acomodation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Acommodation $acomodation)
    {

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($acomodation->image);

            $filePath = Storage::disk('public')->put('images/acomodations/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $acomodation->update($validated);

        if ($update) {
            session()->flash('notif.success', 'Acomodation updated successfully!');
            return redirect()->route('admin.acomodations.index');
        }

        // return abort(500);
        if ($validated->fails()) {
            return back()->withErrors($validated);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acommodation $acomodation)
    {
        Storage::disk('public')->delete($acomodation->image);
        $delete = $acomodation->delete();

        if ($delete) {
            session()->flash('notif.success', 'Acomodation deleted successfully!');
            return redirect()->route('admin.acomodations.index');
        }

        return abort(500);
    }
}
