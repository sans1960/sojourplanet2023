<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Country\StoreRequest;
use App\Http\Requests\Country\UpdateRequest;
use App\Models\Country;
use App\Models\Destination;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $countries = Country::paginate(10);
        return response()->view('admin.countries.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $destinations = Destination::all();
        return response()->view('admin.countries.create',compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/countries/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Country::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Country created successfully!');
            return redirect()->route('admin.countries.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country):Response
    {
        return response()->view('admin.countries.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country):Response
    {
        $destinations = Destination::all();
        return response()->view('admin.countries.edit',compact('destinations','country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Country $country):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($country->image);

            $filePath = Storage::disk('public')->put('images/countries/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $country->update($validated);

        if($update) {
            session()->flash('notif.success', 'Country updated successfully!');
            return redirect()->route('admin.countries.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country): RedirectResponse
    {
        Storage::disk('public')->delete($country->image);
        $delete = $country->delete();

        if($delete) {
            session()->flash('notif.success', 'Country deleted successfully!');
            return redirect()->route('admin.countries.index');
        }

        return abort(500);
    }
}
