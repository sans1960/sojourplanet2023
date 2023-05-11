<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $tags = Tag::orderBy('name')->paginate(10);
        return response()->view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        return response()->view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        $create = Tag::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Tag created successfully!');
            return redirect()->route('admin.tags.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag):Response
    {
        return response()->view('admin.tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag):Response
    {
        return response()->view('admin.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tag $tag):RedirectResponse
    {
        $validated = $request->validated();
        $update = $tag->update($validated);

        if($update) {
            session()->flash('notif.success', 'Tag updated successfully!');
            return redirect()->route('admin.tags.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag):RedirectResponse
    {

        $delete = $tag->delete();

        if($delete) {
            session()->flash('notif.success', 'Tag deleted successfully!');
            return redirect()->route('admin.tags.index');
        }

        return abort(500);
    }
}
