<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListContact;

class ListContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('store');
        $this->middleware('admin')->except('store');
    }
    public function index()
    {
        $listcontacts = ListContact::all();
        return view('admin.listcontact.index', compact('listcontacts'));
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
        $request->validate([

            'email' => 'required|email:dns,rfc,spoof|unique:list_contacts',
            'g-recaptcha-response' => 'required|captcha',


        ]);
        $listcontact = new ListContact;
        $listcontact->email = $request->email;
        $ipadress = request()->ip();
        $listcontact->ipadress = $ipadress;
        $listcontact->save();

        // Mail::to($contact->email)->send(new ListMail($contact));
        // return view('front.listcontact.respuesta',compact('listcontact'));
        return redirect()->back()->with('success', 'Your email has been added satisfactory');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $res = ListContact::where('id', $id)->delete();
        return redirect()->route('contactos.list.index');
    }
}
