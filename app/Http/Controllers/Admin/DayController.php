<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Day\StoreRequest;
use App\Http\Requests\Day\UpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $days = Day::all();
        return response()->view('admin.days.index',compact('days'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $tours = Tour::all();
        return response()->view('admin.days.create',compact('tours'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/days/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Day::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Day created successfully!');
            return redirect()->route('admin.days.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Day $day):Response
    {
        return response()->view('admin.days.show',compact('day'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Day $day):Response
    {
        $tours = Tour::all();
        return response()->view('admin.days.edit',compact('tours','day'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Day $day):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($day->image);

            $filePath = Storage::disk('public')->put('images/days/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $day->update($validated);

        if($update) {
            session()->flash('notif.success', 'Day updated successfully!');
            return redirect()->route('admin.days.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Day $day):RedirectResponse
    {
        Storage::disk('public')->delete($day->image);
        $delete = $day->delete();

        if($delete) {
            session()->flash('notif.success', 'Day deleted successfully!');
            return redirect()->route('admin.days.index');
        }

        return abort(500);
    }
}
