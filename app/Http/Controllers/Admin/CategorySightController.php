<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorySight;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CategorySight\StoreRequest;
use App\Http\Requests\CategorySight\UpdateRequest;

class CategorySightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $categorysights = CategorySight::all();
        return response()->view('admin.categorysights.index',compact('categorysights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        return response()->view('admin.categorysights.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        $create = CategorySight::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Category Sight created successfully!');
            return redirect()->route('admin.categorysights.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(CategorySight $categorysight):Response
    {
        return response()->view('admin.categorysights.show',compact('categorysight'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategorySight $categorysight):Response
    {
        return response()->view('admin.categorysights.edit',compact('categorysight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, CategorySight $categorysight):RedirectResponse
    {
        $validated = $request->validated();
        $update = $categorysight->update($validated);

        if($update) {
            session()->flash('notif.success', 'Category Sight updated successfully!');
            return redirect()->route('admin.categorysights.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategorySight $categorysight):RedirectResponse
    {
        $delete = $categorysight->delete();

        if($delete) {
            session()->flash('notif.success', 'Category Sight deleted successfully!');
            return redirect()->route('admin.categorysights.index');
        }

        return abort(500);
    }
}
