<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Http\Response;
use App\Models\Blog;
use App\Models\Sight;
use App\Models\Tour;
use App\Models\Tag;
use App\Models\Country;
use App\Models\SubRegion;
use App\Models\CategorySight;
use App\Models\Type;
use App\Models\CountryCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class FrontController extends Controller
{
    public function index(): Response
    {
        // if (config('app.debug')) {
        //     return response()->view('front.maintenance');
        // }
        // $blogs = Blog::latest()->take(3)->get();
        $sights = Sight::orderBy('date', 'desc')->take(3)->get();
        // $tours = Tour::latest()->take(3)->get();
        $destinations = Destination::all();
        $antartida = Destination::where('name', 'Antarctica')->get();

        return response()->view('front.index', compact('destinations', 'sights', 'antartida'));
    }
    public function destination(Destination $destination): Response
    {
        $sights = Sight::where('destination_id', $destination->id)->orderBy('date', 'desc')->get();






        return response()->view('front.destination', compact('destination', 'sights'));
    }
    public function country(Country $country): Response
    {
        return response()->view('front.country', compact('country'));
    }
    public function countries()
    {
        return view('front.countries');
    }
    public function terms()
    {
        return view('front.termsconditions');
    }
    public function faqs()
    {
        return view('front.faqs');
    }
    public function private()
    {
        return view('front.privatepolicy');
    }
    public function imagesCopy()
    {
        return view('front.imagescopyright');
    }
    public function bookingConditions()
    {
        return view('front.booking');
    }
    public function cookiePolicy()
    {
        return view('front.cookie');
    }
    public function ourServices()
    {
        return view('front.services');
    }
    public function travelState()
    {
        $countries1 = Country::where('advisory_id', 1)->get();
        $countries2 = Country::where('advisory_id', 2)->get();
        $countries3 = Country::where('advisory_id', 3)->get();
        $countries4 = Country::where('advisory_id', 4)->get();
        return view('front.travelState', compact('countries1', 'countries2', 'countries3', 'countries4'));
    }
    public function blog(Blog $blog): Response
    {
        return response()->view('front.blog', compact('blog'));
    }
    public function allblogs()
    {
        $blogs = Blog::orderBy('date', 'desc')->paginate(12);
        return view('front.travelblog', compact('blogs'));
    }
    public function allsights()
    {
        $destinations = Destination::all();
        $sights = Sight::orderBy('date', 'desc')->paginate(15);
        return view('front.travelsight', compact('sights', 'destinations'));
    }
    public function sight(Sight $sight): Response
    {
        $proxims = Sight::select(DB::raw('*, ( 6367 * acos( cos( radians(' . $sight->latitud . ') ) * cos( radians( latitud ) ) * cos( radians( longitud ) - radians(' . $sight->longitud . ') ) + sin( radians(' . $sight->latitud . ') ) * sin( radians( latitud ) ) ) ) AS distance'))
            ->having('distance', '<', 500)
            ->orderBy('distance')
            ->get();

        return response()->view('front.sight', compact('sight', 'proxims'));
    }
    public function destinationSights(Destination $destination): Response
    {
        $sights = Sight::where('destination_id', $destination->id)->orderBy('date', 'DESC')->paginate(15);
        $countries = Country::where('destination_id', $destination->id)->get();

        return response()->view('front.destinationsights', compact('sights', 'destination', 'countries'));
    }
    public function destinationTours(Destination $destination): Response
    {
        $tours = $destination->tours()->paginate(15);


        return response()->view('front.destinationtours', compact('tours', 'destination'));
    }
    public function countrySights(Country $country): Response
    {
        $sights = Sight::where('country_id', $country->id)->orderBy('date', 'DESC')->paginate(15);

        return response()->view('front.countrysights', compact('sights', 'country'));
    }
    public function categorySights(CategorySight $categorysight): Response
    {
        $sights = Sight::where('categorysight_id', $categorysight->id)->orderBy('date', 'DESC')->paginate(15);

        return response()->view('front.categorysights', compact('sights', 'categorysight'));
    }
    public function tag(Tag $tag)
    {
        $sights = $tag->sights()->paginate(15);
        return view('front.tagsights', compact('sights', 'tag'));
    }

    public function allTour(): Response
    {


        $tours = Tour::orderBy('date', 'desc')->paginate(15);
        return response()->view('front.traveltour', compact('tours'));
    }
    public function tour(Tour $tour): Response
    {
        $type = Type::where('id', $tour->type_id)->get();
        return response()->view('front.tour', compact('tour', 'type'));
    }
    public function imagesTour(Tour $tour): Response
    {
        return response()->view('front.imagestour', compact('tour'));
    }
    public function about(): Response
    {
        return response()->view('front.about');
    }
    public function travel(): Response
    {
        return response()->view('front.travel');
    }
    public function taylor(): Response
    {
        return response()->view('front.taylor');
    }
    public function dream(): Response
    {
        return response()->view('front.dream');
    }
    // public function contactgeneral(){
    //     return view('forms.general');
    // }
    public function contactSight(Sight $sight)
    {
        $countrycodes = CountryCode::all();
        $countries = Country::where('subregion_id', $sight->subregion_id)->where('id', '<>', $sight->country_id)->get();
        $items = Sight::where('country_id', $sight->country_id)->where('id', '<>', $sight->id)->get();
        return view('forms.sight', compact('sight', 'countries', 'items', 'countrycodes'));
    }
    public function contactDestination(Destination $destination)
    {

        $countrycodes = CountryCode::all();
        return view('forms.destination', compact('destination', 'countrycodes'));
    }
    public function contactTour(Tour $tour)
    {
        $countrycodes = CountryCode::all();
        return view('forms.tour', compact('tour', 'countrycodes'));
    }
    public function contactCountry(Country $country)
    {
        $countrycodes = CountryCode::all();
        return view('forms.country', compact('country', 'countrycodes'));
    }
    public function search($q)
    {

        $countries = Country::where('name', 'like', $q . '%')->get();
        return view('front.countries', compact('countries', 'q'));
    }
}
