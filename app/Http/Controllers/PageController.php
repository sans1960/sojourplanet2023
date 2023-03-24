<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function check_slug(Request $request)
{
    $slug = Str::slug($request->name);
    return response()->json(['slug' => $slug]);
}
}
