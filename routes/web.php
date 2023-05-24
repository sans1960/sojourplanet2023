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
use App\Http\Controllers\Admin\ListContactController;
use App\Http\Controllers\Admin\GeneralContactController;
use App\Http\Controllers\Admin\SightContactController;
use App\Http\Controllers\Admin\DestinationContactController;
use App\Http\Controllers\Admin\TourContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;



Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/about-us', [FrontController::class,'about'])->name('about');
Route::get('/taylor-made-tryps', [FrontController::class,'taylor'])->name('taylor');
Route::get('/the-tryp-of-your-dreams', [FrontController::class,'dream'])->name('dream');
Route::get('/destinations/{destination}', [FrontController::class,'destination'])->name('destination');
Route::get('/blogs', [FrontController::class,'allblogs'])->name('blogs');
Route::get('/sights', [FrontController::class,'allsights'])->name('sights');
Route::get('/blogs/{blog}', [FrontController::class,'blog'])->name('blog');
Route::get('/sights/{sight}', [FrontController::class,'sight'])->name('sight');
Route::get('/tours/{tour}', [FrontController::class,'tour'])->name('tour');
Route::get('/tours', [FrontController::class,'allTour'])->name('alltours');
Route::get('sights/country/{country}', [FrontController::class,'countrySights'])->name('countrysights');
Route::get('sights/destinations/{destination}', [FrontController::class,'destinationSights'])->name('destinationsights');
Route::get('/categorysight/{categorysight}', [FrontController::class,'categorySights'])->name('categorysights');
Route::get('tag/{tag}',[FrontController::class,'tag'])->name('tagsights');
Route::get('taylor-made-trips/contact', [FrontController::class , 'contactgeneral'])->name('contactgeneral');
Route::get('contact/sight/{sight}', [FrontController::class , 'contactSight'])->name('contactsight');
Route::get('contact/destination/{destination}', [FrontController::class , 'contactDestination'])->name('contactdestination');
Route::get('contact/tour/{tour}', [FrontController::class , 'contactTour'])->name('contacttour');

Auth::routes(['verify' => true]);


Route::get('/home', [UserController::class,'index'])->middleware('auth','verified')->name('home');
Route::group(['middleware' => 'admin'], function () {
  Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('admin');
    Route::get('/admin/users', [UserController::class, 'allUsers'])->middleware('auth')->name('allusers');
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
Route::get('admin/findsight',[SightController::class,'findSight'])->name('findsight');
Route::post('admin/searchsight',[SightController::class,'searchSight'])->name('searchsight');
Route::get('admin/findcontry',[CountryController::class,'findCountry'])->name('findcountry');
Route::post('admin/searchcountry',[CountryController::class,'searchCountry'])->name('searchcountry');
Route::resource('admin/contactos-list',ListContactController::class)->names('contactos.list');
Route::resource('admin/contactos-general',GeneralContactController::class)->names('contactos.general');
Route::resource('admin/contactos-destinations',DestinationContactController::class)->names('contactos.destination');
Route::resource('admin/contactos-sight',SightContactController::class)->names('contactos.sight');
Route::resource('admin/contactos-tour',TourContactController::class)->names('contactos.tour');






});








Route::get('pages/check_slug', [PageController::class,'check_slug'])
  ->name('pages.check_slug');
Route::get('pages/check_slug_title', [PageController::class,'check_slug_title'])
  ->name('pages.check_slug_title');
Route::get('get-subregions',[PageController::class,'getSubregions'])->name('getsubregions');
Route::get('get-countries',[PageController::class,'getCountries'])->name('getcountries');

