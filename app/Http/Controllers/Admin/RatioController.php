<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ratio;

use Illuminate\Http\Response;
use App\Http\Requests\Ratio\StoreRequest;
use App\Http\Requests\Ratio\UpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class RatioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $ratios = Ratio::all();
        return response()->view('admin.ratios.index',compact('ratios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        return response()->view('admin.ratios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        

        if ($request->hasFile('icon')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/ratios/images', request()->file('icon'));
            $validated['icon'] = $filePath;
        }
        $create = Ratio::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Ratio created successfully!');
            return redirect()->route('admin.ratios.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ratio $ratio):Response
    {
        return response()->view('admin.ratios.show',compact('ratio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ratio $ratio):Response
    {
        return response()->view('admin.ratios.edit',compact('ratio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Ratio $ratio):RedirectResponse
    {
        
        $validated = $request->validated();
        if ($request->hasFile('icon')) {
            // delete image
            Storage::disk('public')->delete($ratio->icon);

            $filePath = Storage::disk('public')->put('images/ratios/images', request()->file('icon'),'public');
            $validated['icon'] = $filePath;
        }
        $update = $ratio->update($validated);

        if($update) {
            session()->flash('notif.success', 'Ratio updated successfully!');
            return redirect()->route('admin.ratios.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ratio $ratio):RedirectResponse
    {
        Storage::disk('public')->delete($ratio->icon);
        $delete = $ratio->delete();


        if($delete) {
            session()->flash('notif.success', 'Ratio deleted successfully!');
            return redirect()->route('admin.ratios.index');
        }

        return abort(500);
    }
}
