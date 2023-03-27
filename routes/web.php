<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\ImageDestinationController;
use App\Http\Controllers\Admin\SubRegionController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CategoryBlogController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategorySightController;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/destinations',DestinationController::class)->middleware('auth')->names('admin.destinations');
Route::resource('admin/imagedestinations',ImageDestinationController::class)->middleware('auth')->names('admin.imagedestinations');
Route::resource('admin/subregions',SubRegionController::class)->middleware('auth')->names('admin.subregions');
Route::resource('admin/countries',CountryController::class)->middleware('auth')->names('admin.countries');
Route::resource('admin/categoryblogs',CategoryBlogController::class)->middleware('auth')->names('admin.categoryblogs');
Route::resource('admin/blogs',BlogController::class)->middleware('auth')->names('admin.blogs');
Route::resource('admin/posts',PostController::class)->middleware('auth')->names('admin.posts');
Route::resource('admin/categorysights',CategorySightController::class)->middleware('auth')->names('admin.categorysights');

Route::get('pages/check_slug', [PageController::class,'check_slug'])
  ->name('pages.check_slug');
Route::get('pages/check_slug_title', [PageController::class,'check_slug_title'])
  ->name('pages.check_slug_title');
Route::get('get-subregions',[PageController::class,'getSubregions'])->name('getsubregions');

