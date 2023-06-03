<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Type\StoreRequest;
use App\Http\Requests\Type\UpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    public function index():Response
    {
        $types = Type::paginate(10);
        return response()->view('admin.types.index',compact('types'));
    }
    public function create():Response
    {
        return response()->view('admin.types.create');
    }
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        

        if ($request->hasFile('icon')) {
             // put image in the public storage
            $filePathIcon = Storage::disk('public')->put('images/types/images', request()->file('icon'));
           

            $validated['icon'] = $filePathIcon;
            
        }
        $create = Type::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Type created successfully!');
            return redirect()->route('admin.types.index');
        }

        return abort(500);
    }
    public function show(Type $type):Response
    {
        return response()->view('admin.types.show',compact('type'));
    }
    public function edit(Type $type):Response
    {
        return response()->view('admin.types.edit',compact('type'));
    }
    public function update(UpdateRequest $request, Type $type):RedirectResponse
    {
        $validated = $request->validated();
        if ($request->hasFile('icon')) {
            // delete image
            Storage::disk('public')->delete($type->icon);

            $filePath = Storage::disk('public')->put('images/types/images', request()->file('icon'),'public');
            $validated['icon'] = $filePath;
        }
   
        $update = $type->update($validated);

        if($update) {
            session()->flash('notif.success', 'Type updated successfully!');
            return redirect()->route('admin.types.index');
        }

        return abort(500);
    }
    public function destroy(Type $type):RedirectResponse
    {
        Storage::disk('public')->delete($type->icon);
        $delete = $type->delete();


        if($delete) {
            session()->flash('notif.success', 'Type deleted successfully!');
            return redirect()->route('admin.types.index');
        }

        return abort(500);
    }

}
