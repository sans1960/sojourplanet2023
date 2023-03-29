<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Blog\StoreRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\CategoryBlog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $blogs = Blog::orderBy('date','DESC')->paginate(10);
        return response()->view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $categoryblogs = CategoryBlog::all();
        return response()->view('admin.blogs.create',compact('categoryblogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/blogs/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Blog::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Blog created successfully!');
            return redirect()->route('admin.blogs.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog):Response
    {
        return response()->view('admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog):Response
    {
        $categoryblogs = CategoryBlog::all();
        return response()->view('admin.blogs.edit',compact('categoryblogs','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Blog $blog):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($blog->image);

            $filePath = Storage::disk('public')->put('images/blogs/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $blog->update($validated);

        if($update) {
            session()->flash('notif.success', 'Blog updated successfully!');
            return redirect()->route('admin.blogs.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog):RedirectResponse
    {
        Storage::disk('public')->delete($blog->image);
        $delete = $blog->delete();

        if($delete) {
            session()->flash('notif.success', 'Blog deleted successfully!');
            return redirect()->route('admin.blogs.index');
        }

        return abort(500);
    }
}
