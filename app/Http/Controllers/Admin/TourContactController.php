<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourContact;

class TourContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('store');
 
       
    }



    public function index()
    {
        $contacts = TourContact::all();
        return view('admin.contactosTour.index',compact('contacts'));
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
            'tour_id'=>'required',
            'legal'=>'required',
            'surname'=>'required|max:20',
            'phone'=>'required|max:20',
            'email'=>'required|email',
            'city'=>'required|max:20',
            'state'=>'required|max:20',
            'zipcode'=>'max:20',
            'message'=>'max:2000',
           
            'season'=>'max:20',
            'travelers'=>'max:50',
            'children'=>'max:50',
            
            'romantic'=>'max:20',
            'mobility'=>'max:20',
            
            
        ]);
        $contact = TourContact::create($validated);
        return view('forms.respuestatour',compact('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = TourContact::find($id);
        return view('admin.contactosTour.show',compact('contact'));
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
        $contact = TourContact::find($id);
        $contact->delete();

        return redirect()->route('contactos.tour.index');
    }
}
