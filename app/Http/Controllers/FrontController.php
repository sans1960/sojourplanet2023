<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Http\Response;
use App\Models\Blog;
use App\Models\Sight;
use App\Models\Tour;

class FrontController extends Controller
{
    public function index():Response
    {
        $blogs = Blog::latest()->take(2)->get();
        $sights = Sight::latest()->take(2)->get();
        $tours = Tour::latest()->take(2)->get();
        $destinations = Destination::all();
        return response()->view('front.index',compact('destinations','blogs','sights','tours'));
    }
    public function destination(Destination $destination):Response
    {
        return response()->view('front.destination',compact('destination'));
    }
    public function blog(Blog $blog):Response
    {
        return response()->view('front.blog',compact('blog'));
    }
    public function sight(Sight $sight):Response
    {
        return response()->view('front.sight',compact('sight'));
    }
    public function tour(Tour $tour):Response
    {
        return response()->view('front.tour',compact('tour'));
    }
    public function about():Response
    {
        return response()->view('front.about');
    }
    public function taylor():Response
    {
        return response()->view('front.taylor');
    }
    public function dream():Response
    {
        return response()->view('front.dream');
    }
    public function contactgeneral(){
        return view('forms.general');
    }
}
