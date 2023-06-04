<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ratio;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Ratio\StoreRequest;
use App\Http\Requests\Ratio\UpdateRequest;
use Illuminate\Http\RedirectResponse;


class RatioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $ratios = Ratio::paginate(15);
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
    public function show(string $id)
    {
        //
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
        
        $delete = $ratio->delete();


        if($delete) {
            session()->flash('notif.success', 'Ratio deleted successfully!');
            return redirect()->route('admin.ratios.index');
        }

        return abort(500);
    }
}
