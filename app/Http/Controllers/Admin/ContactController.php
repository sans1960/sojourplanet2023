<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryCode;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('create', 'store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contact::all();
        return view('admin.contactos.index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countrycodes = CountryCode::all();
        return view('admin.contactos.create', compact('countrycodes'));
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
            // 'g-recaptcha-response' => 'required|captcha',

            'country_code_id' => 'required',

        ]);
        $contact = new Contact;
        $contact->trait = $request->trait;
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->legal = $request->legal;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->city = $request->city;
        $contact->zipcode = $request->zipcode;
        $contact->country_code_id = $request->country_code_id;
        $contact->message = $request->message;
        $ipAdress = request()->ip();
        $contact->ipAdress = $ipAdress;
        $contact->save();
        return view('forms.respuestacontacto', compact('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::where('id', $id)->get();
        return view('admin.contactos.show', compact('contact'));
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
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contactos.index');
    }
}
