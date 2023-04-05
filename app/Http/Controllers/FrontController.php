<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Http\Response;

class FrontController extends Controller
{
    public function index():Response
    {
        $destinations = Destination::all();
        return response()->view('front.index',compact('destinations'));
    }
    public function destination(Destination $destination):Response
    {
        return response()->view('front.destination',compact('destination'));
    }
}
