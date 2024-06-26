<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralContact;
use App\Models\CountryCode;

class GeneralContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('create', 'store');
    }



    public function index()
    {
        $contactos = GeneralContact::all();
        return view('admin.contactosGeneral.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countrycodes = CountryCode::all();
        return view('admin.contactosGeneral.create', compact('countrycodes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'surname' => 'required|max:20',
            'legal' => 'required',

            'phone' => 'required|max:12',
            'email' => 'required|email:dns,rfc,spoof',
            'g-recaptcha-response' => 'required|captcha',

            'country_code_id' => 'required',

        ]);

        $contact = new GeneralContact;
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
        $ipAdress = request()->ip();
        $contact->ipAdress = $ipAdress;
        $contact->save();


        return view('forms.respuestageneral', compact('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = GeneralContact::where('id', $id)->get();
        return view('admin.contactosGeneral.show', compact('contact'));
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
        $contact = GeneralContact::find($id);
        $contact->delete();
        return redirect()->route('contactos.general.index');
    }
}
