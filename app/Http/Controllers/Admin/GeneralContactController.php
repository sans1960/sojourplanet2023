<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralContact;

class GeneralContactController extends Controller
{
        public function __construct() {
        $this->middleware('auth')->except('store');
        }


     
    public function index()
    {
        $contactos = GeneralContact::all();
        return view('admin.contactosGeneral.index',compact('contactos'));
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
            'name'=>'required|max:20',
            'surname'=>'required|max:20',
            'phone'=>'required|max:20',
            'email'=>'required|email',
            'city'=>'required|max:20',
            'state'=>'required|max:20',
            'zipcode'=>'max:20',
            'message'=>'max:255',
        ]);
        $contact = GeneralContact::create($request->all());
        return view('forms.respuestageneral',compact('contact'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = GeneralContact::where('id',$id)->get();
        return view('admin.contactosGeneral.show',compact('contact'));
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
