<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DestinationContact;
use App\Models\Destination;
use App\Models\SubRegion;
use Illuminate\Http\Request;

class DestinationContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
 
       
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinationcontacts=DestinationContact::all();
        return view('admin.contactosDestination.index',compact('destinationcontacts'));
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
            'name'=>'required|max:20',
            'destination_id'=>'required',
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
        ]);
        $contact =  DestinationContact::create($validated);
      
        return view('forms.respuestadestination')->with('contact',$contact);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destinationcontact = DestinationContact::find($id);
        return view('admin.contactosDestination.show',compact('destinationcontact'));
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
        $destinationcontact = DestinationContact::find($id);
        $destinationcontact->delete();
        return redirect()->route('contactos.destination.index');
    }
}
