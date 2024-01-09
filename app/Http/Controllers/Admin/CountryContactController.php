<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CountryContact;
use Illuminate\Http\Request;

class CountryContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = CountryContact::all();
        return view('admin.contactosCountry.index', compact('contacts'));
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
        $validated =  $request->validate([
            'name' => 'required|max:20',
            'country_id' => 'required',
            'legal' => 'required',
            'surname' => 'required|max:20',
            'phone' => 'required|max:12',
            'email' => 'required|email:dns,rfc,spoof',
            'country_code_id' => 'required',
        ]);
        $contact = new CountryContact;
        $contact->trait = $request->trait;
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->legal = $request->legal;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->city = $request->city;
        $contact->zipcode = $request->zipcode;
        $contact->country_code_id = $request->country_code_id;
        $contact->duration = $request->duration;
        $contact->season = $request->season;
        $contact->travelers = $request->travelers;
        $contact->children = $request->children;
        $contact->mobility = $request->mobility;
        $contact->romantic = $request->romantic;
        $contact->type = $request->type;
        $contact->message = $request->message;
        $contact->countries = $request->countries;
        $contact->country_id = $request->country_id;
        $ipAdress = request()->ip();
        $contact->ipAdress = $ipAdress;
        $contact->save();


        return view('forms.respuestacountry')->with('contact', $contact);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = CountryContact::find($id);
        return view('admin.contactosCountry.show', compact('contact'));
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
        $contact = CountryContact::find($id);
        $contact->delete();
        return redirect()->route('contactos.country.index');
    }
}
