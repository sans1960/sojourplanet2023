<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Experience\StoreRequest as ExperienceStoreRequest;
use App\Http\Requests\Location\StoreRequest;
use App\Http\Requests\Location\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;
use App\Models\Experience;



class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::paginate(12);
        return response()->view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinations = Destination::all();
        return response()->view('admin.experiences.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/experiences/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Experience::create($validated);

        if ($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Experience created successfully!');
            return redirect()->route('admin.experiences.index');
        }

        // return abort(500);
        if ($validated->fails()) {
            return back()->withErrors($validated);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return response()->view('admin.experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        $destinations = Destination::all();
        return response()->view('admin.experiences.edit', compact('destinations', 'experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Experience $experience)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($experience->image);

            $filePath = Storage::disk('public')->put('images/experiences/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $experience->update($validated);

        if ($update) {
            session()->flash('notif.success', 'Experience updated successfully!');
            return redirect()->route('admin.experiences.index');
        }

        // return abort(500);
        if ($validated->fails()) {
            return back()->withErrors($validated);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        Storage::disk('public')->delete($experience->image);
        $delete = $experience->delete();

        if ($delete) {
            session()->flash('notif.success', 'Experience deleted successfully!');
            return redirect()->route('admin.experiences.index');
        }

        return abort(500);
    }
}
