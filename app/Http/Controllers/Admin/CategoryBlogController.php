<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CategoryBlog\StoreRequest;
use App\Http\Requests\CategoryBlog\UpdateRequest;
use App\Models\CategoryBlog;



class CategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $categoryblogs = CategoryBlog::paginate(10);
        return response()->view('admin.categoryblogs.index',compact('categoryblogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        return response()->view('admin.categoryblogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        $create = CategoryBlog::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Category Blog created successfully!');
            return redirect()->route('admin.categoryblogs.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryBlog $categoryblog):Response
    {
        return response()->view('admin.categoryblogs.show',compact('categoryblog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryBlog $categoryblog):Response
    {
        return response()->view('admin.categoryblogs.edit',compact('categoryblog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, CategoryBlog $categoryblog):RedirectResponse
    {
        $validated = $request->validated();
        $update = $categoryblog->update($validated);

        if($update) {
            session()->flash('notif.success', 'Category Blog updated successfully!');
            return redirect()->route('admin.categoryblogs.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryBlog $categoryblog):RedirectResponse
    {
        $delete = $categoryblog->delete();

        if($delete) {
            session()->flash('notif.success', 'Category Blog deleted successfully!');
            return redirect()->route('admin.categoryblogs.index');
        }

        return abort(500);
    }
}
