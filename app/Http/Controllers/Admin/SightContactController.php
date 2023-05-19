<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SightContact;

class SightContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('admin')->except('store');
 
       
    }


    public function index()
    {
        $contacts = SightContact::all();
        return view('admin.contactosSight.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'name'=>'required|max:20',
            'trait' => 'max:10',
            'sight_id'=>'required',
            'legal'=>'required',
            'surname'=>'required|max:20',
            'phone'=>'required|max:20',
            'email'=>'required|email',
            'city'=>'required|max:20',
            'state'=>'required|max:20',
            'zipcode'=>'max:20',
            'message'=>'max:255',
            'duration'=>'max:50',
            'season'=>'max:20',
            'travelers'=>'max:50',
            'children'=>'max:50',
            'type'=>'max:20',
            'romantic'=>'max:20',
            'mobility'=>'max:20',
            'countries'=>'max:255',
            'sights'=>'max:255',
            
        ]);
        $contact = SightContact::create($validated);
        return view('forms.respuestasight',compact('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = SightContact::find($id);
        return view('admin.contactosSight.show',compact('contact'));
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
        $contact = SightContact::find($id);
        $contact->delete();

        return redirect()->route('contactos.sight.index');
    }
}
