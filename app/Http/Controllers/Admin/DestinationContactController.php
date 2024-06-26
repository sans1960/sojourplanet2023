<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationContact;
use App\Models\Destination;
use App\Models\SubRegion;
use Illuminate\Http\Request;
use App\Models\CountryCode;

class DestinationContactController extends Controller
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
        $contacts = DestinationContact::all();
        return view('admin.contactosDestination.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Destination $destination)
    // {
    //     $countrycodes = CountryCode::all();
    //     return view('admin.contactosDestination.create',compact('destination','countrycodes'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'name' => 'required|max:20',
            'destination_id' => 'required',
            'legal' => 'required',
            'surname' => 'required|max:20',
            'phone' => 'required|max:12',
            'email' => 'required|email:dns,rfc,spoof',
            'g-recaptcha-response' => 'required|captcha',
            'country_code_id' => 'required',
        ]);
        $contact = new DestinationContact;
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
        $contact->destination_id = $request->destination_id;
        $ipAdress = request()->ip();
        $contact->ipAdress = $ipAdress;
        $contact->save();


        return view('forms.respuestadestination')->with('contact', $contact);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = DestinationContact::find($id);
        return view('admin.contactosDestination.show', compact('contact'));
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
    public function destroy($id)
    {
        $contact = DestinationContact::find($id);
        $contact->delete();
        return redirect()->route('contactos.destination.index');
    }
}
