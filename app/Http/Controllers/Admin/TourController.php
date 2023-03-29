<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Tour\StoreRequest;
use App\Http\Requests\Tour\UpdateRequest;
use App\Models\Tour;
use Illuminate\Http\RedirectResponse;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $tours = Tour::all();
        return response()->view('admin.tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $destinations = Destination::all();
        $types = Type::all();
        return response()->view('admin.tours.create',compact('destinations','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/tours/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Tour::create($validated);
        if($request->types){
            $create->types()->attach($request->types);
        }
        if($request->destinations){
            $create->destinations()->attach($request->destinations);
        }
        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Tour created successfully!');
            return redirect()->route('admin.tours.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour):Response
    {
        return response()->view('admin.tours.show',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour):Response
    {
        $destinations = Destination::all();
        $types = Type::all();
        $tourtypes = $tour->types;
        $difftypes = $types->diff($tourtypes);
        $tourdestinations = $tour->destinations;
        $diffdestinations = $destinations->diff($tourdestinations);
        return response()->view('admin.tours.edit',compact('tour','types','difftypes','destinations','diffdestinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
