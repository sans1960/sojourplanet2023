<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Type;
use App\Models\Ratio;
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
        $tours = Tour::orderBy('date','DESC')->paginate(10);;
        return response()->view('admin.tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $destinations = Destination::all();
        $types = Type::all();
        $ratios = Ratio::all();
      
        return response()->view('admin.tours.create',compact('destinations','types','ratios'));
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

        // // insert only requests that already validated in the StoreRequest
        $create = Tour::create($validated);
            if($request->ratios){
                $create->ratios()->attach($request->ratios);
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
        $type = Type::where('id',$tour->type_id)->get();
        return response()->view('admin.tours.show',compact('tour','type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour):Response
    {
        $destinations = Destination::all();
        $types = Type::all();
        $ratios = Ratio::all();
        $tourratios = $tour->ratios;
        $diffratios = $ratios->diff($tourratios);
        $tourdestinations = $tour->destinations;
        $diffdestinations = $destinations->diff($tourdestinations);
        return response()->view('admin.tours.edit',compact('tour','ratios','diffratios','destinations','diffdestinations','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tour $tour):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($tour->image);

            $filePath = Storage::disk('public')->put('images/tours/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $tour->update($validated);
        if($request->ratios){
            $tour->ratios()->sync($request->ratios);
         }
        if($request->destinations){
            $tour->destinations()->sync($request->destinations);
        }
        if($update) {
            session()->flash('notif.success', 'Tour updated successfully!');
            return redirect()->route('admin.tours.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour):RedirectResponse
    {
        Storage::disk('public')->delete($tour->image);

        $delete = $tour->delete();
        $tour->ratios()->detach();
        $tour->destinations()->detach();

        if($delete) {
            session()->flash('notif.success', 'Tour deleted successfully!');
            return redirect()->route('admin.tours.index');
        }

        return abort(500);
    }
}
