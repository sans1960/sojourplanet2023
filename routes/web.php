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
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\SightController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\DayController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;



Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/about-us', [FrontController::class,'about'])->name('about');
Route::get('/taylor-made-tryps', [FrontController::class,'taylor'])->name('taylor');
Route::get('/the-tryp-of-your-dreams', [FrontController::class,'dream'])->name('dream');
Route::get('/destinations/{destination}', [FrontController::class,'destination'])->name('destination');
Route::get('/blogs/{blog}', [FrontController::class,'blog'])->name('blog');
Route::get('/sights/{sight}', [FrontController::class,'sight'])->name('sight');

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
Route::resource('admin/tags',TagController::class)->middleware('auth')->names('admin.tags');
Route::resource('admin/sights',SightController::class)->middleware('auth')->names('admin.sights');
Route::resource('admin/types',TypeController::class)->middleware('auth')->names('admin.types');
Route::resource('admin/tours',TourController::class)->middleware('auth')->names('admin.tours');
Route::resource('admin/days',DayController::class)->middleware('auth')->names('admin.days');

Route::get('pages/check_slug', [PageController::class,'check_slug'])
  ->name('pages.check_slug');
Route::get('pages/check_slug_title', [PageController::class,'check_slug_title'])
  ->name('pages.check_slug_title');
Route::get('get-subregions',[PageController::class,'getSubregions'])->name('getsubregions');
Route::get('get-countries',[PageController::class,'getCountries'])->name('getcountries');

