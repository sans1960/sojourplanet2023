<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\ImageDestinationController;
use App\Http\Controllers\Admin\SubRegionController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/destinations',DestinationController::class)->middleware('auth')->names('admin.destinations');
Route::resource('admin/imagedestinations',ImageDestinationController::class)->middleware('auth')->names('admin.imagedestinations');
Route::resource('admin/subregions',SubRegionController::class)->middleware('auth')->names('admin.subregions');
Route::resource('admin/countries',CountryController::class)->middleware('auth')->names('admin.countries');

Route::get('pages/check_slug', [PageController::class,'check_slug'])
  ->name('pages.check_slug');
Route::get('pages/check_slug_title', [PageController::class,'check_slug_title'])
  ->name('pages.check_slug_title');
Route::get('get-subregions',[PageController::class,'getSubregions'])->name('getsubregions');

