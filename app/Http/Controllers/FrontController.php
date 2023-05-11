<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Http\Response;
use App\Models\Blog;
use App\Models\Sight;
use App\Models\Tour;
use App\Models\Country;
use App\Models\SubRegion;

class FrontController extends Controller
{
    public function index():Response
    {
        $blogs = Blog::latest()->take(3)->get();
        $sights = Sight::latest()->take(5)->get();
        $tours = Tour::latest()->take(2)->get();
        $destinations = Destination::all();
        return response()->view('front.index',compact('destinations','blogs','sights','tours'));
    }
    public function destination(Destination $destination):Response
    {
        $sights = Sight::where('destination_id',$destination->id)->orderBy('date','desc')->take(8)->get();
        return response()->view('front.destination',compact('destination','sights'));
    }
    public function blog(Blog $blog):Response
    {
        return response()->view('front.blog',compact('blog'));
    }
    public function allblogs(){
        $blogs = Blog::orderBy('date','desc')->paginate(12);
        return view('front.travelblog',compact('blogs'));
    }
    public function allsights(){
        $sights = Sight::orderBy('date','desc')->paginate(16);
        return view('front.travelsight',compact('sights'));
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
    public function contactSight(Sight $sight){
        $countries = Country::where('subregion_id',$sight->subregion_id)->where('id','<>',$sight->country_id)->get();
        $items = Sight::where('country_id',$sight->country_id)->where('id','<>',$sight->id)->get();
        return view('forms.sight',compact('sight','countries','items'));
    }
    public function contactDestination(Destination $destination){

        return view('forms.destination',compact('destination'));
    }
}
