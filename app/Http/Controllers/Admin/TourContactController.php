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
        $this->middleware('admin')->except('store');
 
       
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
            'tour_id'=>'required',
            'legal'=>'required',
            'surname'=>'required|max:20',
            'phone'=>'required|max:12',
            'email'=>'required|email:dns,rfc,spoof',
            'country_code_id' => 'required',        
        ]);
        $contact = new TourContact;
        $contact->trait = $request->trait;
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->legal = $request->legal;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->city = $request->city;
        $contact->zipcode = $request->zipcode;
        $contact->country_code_id = $request->country_code_id;
        $contact->season = $request->season;
        $contact->travelers = $request->travelers;
        $contact->children = $request->children;
        $contact->mobility = $request->mobility;
        $contact->romantic = $request->romantic;
        $contact->message = $request->message;     
        $contact->tour_id = $request->tour_id;
        $ipAdress = request()->ip();
        $contact->ipAdress = $ipAdress;
        $contact->save();
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
