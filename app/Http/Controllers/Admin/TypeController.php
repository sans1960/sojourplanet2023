<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Type\StoreRequest;
use App\Http\Requests\Type\UpdateRequest;
use Illuminate\Http\RedirectResponse;

class TypeController extends Controller
{
    public function index():Response
    {
        $types = Type::all();
        return response()->view('admin.types.index',compact('types'));
    }
    public function create():Response
    {
        return response()->view('admin.types.create');
    }
    public function store(StoreRequest $request):RedirectResponse
    {
        $validated = $request->validated();
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
        $update = $type->update($validated);

        if($update) {
            session()->flash('notif.success', 'Type updated successfully!');
            return redirect()->route('admin.types.index');
        }

        return abort(500);
    }
    public function destroy(Type $type):RedirectResponse
    {

        $delete = $type->delete();

        if($delete) {
            session()->flash('notif.success', 'Type deleted successfully!');
            return redirect()->route('admin.types.index');
        }

        return abort(500);
    }

}
