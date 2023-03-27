<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Destination;
use App\Models\CategorySight;
use App\Models\Tag;



class SightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        return response()->view('admin.sights.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
       $destinations = Destination::all();
       $categorysights = CategorySight::all();
       $tags = Tag::all();
       return response()->view('admin.sights.create',compact('destinations','categorysights','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
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
