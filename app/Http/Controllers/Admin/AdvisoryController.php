<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advisory;
use Illuminate\Http\Request;

class AdvisoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advisories = Advisory::all();
        return view('admin.advisories.index', compact('advisories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advisories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $advisory = new Advisory();
        $advisory->level = $request->level;
        $advisory->legend = $request->legend;
        $advisory->color = $request->color;
        $advisory->save();
        session()->flash('notif.success', 'Advisory created successfully!');
        return redirect()->route('admin.advisories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advisory $advisory)
    {
        return view('admin.advisories.show', compact('advisory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advisory $advisory)
    {
        return view('admin.advisories.edit', compact('advisory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advisory $advisory)
    {
        $advisory->level = $request->level;
        $advisory->legend = $request->legend;
        $advisory->color = $request->color;
        $advisory->update();
        session()->flash('notif.success', 'Advisory updated successfully!');
        return redirect()->route('admin.advisories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advisory $advisory)
    {
        $advisory->delete();
        session()->flash('notif.success', 'Advisory deleted successfully!');
        return redirect()->route('admin.advisories.index');
    }
}
