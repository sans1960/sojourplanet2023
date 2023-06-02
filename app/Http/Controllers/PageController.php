<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SubRegion;
use App\Models\Country;

class PageController extends Controller
{
    public function check_slug(Request $request)
{
    $slug = Str::slug($request->name);
    return response()->json(['slug' => $slug]);
}
public function check_slug_title(Request $request)
{
    $slug = Str::slug($request->title);
    return response()->json(['slug' => $slug]);
}
    public function check_slug_site(Request $request)
{
    $slug = Str::slug($request->site);
    return response()->json(['slug' => $slug]);
}
public function getSubRegions(Request $request){
    $subregions = Subregion::where('destination_id',$request->destination_id)->orderBy('name')->get();
    if (count($subregions) > 0) {
        return response()->json($subregions);
    }
}
public function getCountries(Request $request){
    $countries = Country::where('subregion_id',$request->subregion_id)->orderBy('name')->get();
    if (count($countries) > 0) {
        return response()->json($countries);
    }
}
}
