<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SubRegion;

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
public function getSubRegions(Request $request){
    $subregions = Subregion::where('destination_id',$request->destination_id)->orderBy('name')->get();
    if (count($subregions) > 0) {
        return response()->json($subregions);
    }
}
}
