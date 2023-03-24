<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Destination;
use App\Http\Requests\Destination\StoreRequest;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        return response()->view('admin.destinations.index',['destinations' => Destination::orderBy('updated_at','desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        return response()->view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/destinations/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Destination::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Destination created successfully!');
            return redirect()->route('admin.destinations.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
