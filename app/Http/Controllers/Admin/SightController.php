<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Destination;
use App\Models\CategorySight;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Sight\StoreRequest;
use App\Http\Requests\Sight\UpdateRequest;
use App\Models\Country;
use App\Models\Sight;
use Illuminate\Http\RedirectResponse;

class SightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $sights = Sight::orderBy('date', 'DESC')->paginate(20);;
        return response()->view('admin.sights.index', compact('sights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $destinations = Destination::all();
        $categorysights = CategorySight::all();
        $tags = Tag::all();
        $countries = Country::all();
        return response()->view('admin.sights.create', compact('destinations', 'categorysights', 'tags', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/sights/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Sight::create($validated);
        if ($request->tags) {
            $create->tags()->attach($request->tags);
        }
        if ($request->countries) {
            $create->countries()->attach($request->countries);
        }
        if ($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Sight created successfully!');
            return redirect()->route('admin.sights.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sight $sight): Response
    {
        return response()->view('admin.sights.show', compact('sight'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sight $sight): Response
    {
        $destinations = Destination::all();
        $categorysights = CategorySight::all();
        $tags = Tag::all();
        $sighttags = $sight->tags;
        $difftags = $tags->diff($sighttags);
        $countries = Country::all();
        $sightcountries = $sight->countries;
        $diffcountries = $countries->diff($sightcountries);
        return response()->view('admin.sights.edit', compact('sight', 'destinations', 'categorysights', 'tags', 'difftags', 'diffcountries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Sight $sight): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($sight->image);

            $filePath = Storage::disk('public')->put('images/sights/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $sight->update($validated);
        if ($request->tags) {
            $sight->tags()->sync($request->tags);
        }
        if ($request->countries) {
            $sight->countries()->sync($request->countries);
        }

        if ($update) {
            session()->flash('notif.success', 'Sight updated successfully!');
            return redirect()->route('admin.sights.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sight $sight): RedirectResponse
    {
        Storage::disk('public')->delete($sight->image);

        $delete = $sight->delete();
        $sight->tags()->detach();

        if ($delete) {
            session()->flash('notif.success', 'Sight deleted successfully!');
            return redirect()->route('admin.sights.index');
        }

        return abort(500);
    }
    public function findSight()
    {
        return view('admin.sights.search');
    }
    public function searchSight(Request $request)
    {
        $search = $request->input('search');
        $sights = Sight::where('title', 'LIKE', "%{$search}%")->get();
        return view('admin.sights.search', compact('sights'));
    }
}
