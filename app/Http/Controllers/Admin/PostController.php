<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Blog;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        $posts = Post::paginate(20);
        return response()->view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():Response
    {
        $blogs = Blog::all();
        return response()->view('admin.posts.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Post::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Post created successfully!');
            return redirect()->route('admin.posts.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post):Response
    {
        return response()->view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post):Response
    {
        $blogs = Blog::all();
        return response()->view('admin.posts.edit',compact('blogs','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Post $post):RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($post->image);

            $filePath = Storage::disk('public')->put('images/posts/images', request()->file('image'),'public');
            $validated['image'] = $filePath;
        }

        $update = $post->update($validated);

        if($update) {
            session()->flash('notif.success', 'Post updated successfully!');
            return redirect()->route('admin.posts.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post):RedirectResponse
    {
        Storage::disk('public')->delete($post->image);
        $delete = $post->delete();

        if($delete) {
            session()->flash('notif.success', 'Post deleted successfully!');
            return redirect()->route('admin.posts.index');
        }

        return abort(500);
    }
}
