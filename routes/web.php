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
use App\Http\Controllers\Admin\RatioController;
use App\Http\Controllers\Admin\ImageTourController;
use App\Http\Controllers\Admin\ImageSightController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\DayController;
use App\Http\Controllers\Admin\LocationTourController;
use App\Http\Controllers\Admin\ListContactController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GeneralContactController;
use App\Http\Controllers\Admin\LandingContactController;
use App\Http\Controllers\Admin\SightContactController;
use App\Http\Controllers\Admin\DestinationContactController;
use App\Http\Controllers\Admin\CountryContactController;
use App\Http\Controllers\Admin\TourContactController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\AcommodationController;
use App\Http\Controllers\Admin\AdvisoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;



Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'about'])->name('about');
Route::get('/tailor-made-trips', [FrontController::class, 'taylor'])->name('taylor');
Route::get('/the-trip-of-your-dreams', [FrontController::class, 'dream'])->name('dream');
Route::get('/destinations/{destination}', [FrontController::class, 'destination'])->name('destination');
Route::get('/countries/{country}', [FrontController::class, 'country'])->name('country');
Route::get('/countries', [FrontController::class, 'countries'])->name('countries');
Route::get('/travelstate', [FrontController::class, 'travelState'])->name('travelstate');
Route::get('/images-copyright', [FrontController::class, 'imagesCopy'])->name('imagescopy');
Route::get('/terms-conditions', [FrontController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [FrontController::class, 'private'])->name('private');
Route::get('/faqs', [FrontController::class, 'faqs'])->name('faqs');
Route::get('/booking-conditions', [FrontController::class, 'bookingConditions'])->name('booking');
Route::get('/cookie-policy', [FrontController::class, 'cookiePolicy'])->name('cookie');
Route::get('/our-services', [FrontController::class, 'ourServices'])->name('services');


Route::get('/search/{q}', [FrontController::class, 'search'])->name('search');
Route::get('/blogs', [FrontController::class, 'allblogs'])->name('blogs');
Route::get('/sights', [FrontController::class, 'allsights'])->name('sights');
Route::get('/travel', [FrontController::class, 'travel'])->name('travel');
Route::get('/blogs/{blog}', [FrontController::class, 'blog'])->name('blog');
Route::get('/sights/{sight}', [FrontController::class, 'sight'])->name('sight');
Route::get('/tours/{tour}', [FrontController::class, 'tour'])->name('tour');
Route::get('/imagestour/{tour}', [FrontController::class, 'imagesTour'])->name('imagestour');
Route::get('/tours', [FrontController::class, 'allTour'])->name('alltours');
Route::get('/tours/destinations/{destination}', [FrontController::class, 'destinationTours'])->name('destinationtours');
Route::get('sights/country/{country}', [FrontController::class, 'countrySights'])->name('countrysights');
Route::get('sights/destinations/{destination}', [FrontController::class, 'destinationSights'])->name('destinationsights');
Route::get('/categorysight/{categorysight}', [FrontController::class, 'categorySights'])->name('categorysights');
Route::get('tag/{tag}', [FrontController::class, 'tag'])->name('tagsights');

// Route::get('taylor-made-trips/contact', [FrontController::class , 'contactgeneral'])->name('contactgeneral');
Route::get('contact/sight/{sight}', [FrontController::class, 'contactSight'])->name('contactsight');
Route::get('contact/destination/{destination}', [FrontController::class, 'contactDestination'])->name('contactdestination');
Route::get('contact/tour/{tour}', [FrontController::class, 'contactTour'])->name('contacttour');
Route::get('contact/country/{country}', [FrontController::class, 'contactCountry'])->name('contactcountry');

Auth::routes(['verify' => true]);


Route::get('/home', [UserController::class, 'index'])->middleware('auth', 'verified')->name('home');
Route::group(['middleware' => 'admin'], function () {
  Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('admin');
  Route::get('/admin/users', [UserController::class, 'allUsers'])->middleware('auth')->name('allusers');
  Route::resource('admin/destinations', DestinationController::class)->middleware('auth')->names('admin.destinations');
  Route::resource('admin/imagedestinations', ImageDestinationController::class)->middleware('auth')->names('admin.imagedestinations');
  Route::resource('admin/subregions', SubRegionController::class)->middleware('auth')->names('admin.subregions');
  Route::resource('admin/countries', CountryController::class)->middleware('auth')->names('admin.countries');
  Route::resource('admin/locations', LocationController::class)->middleware('auth')->names('admin.locations');
  Route::resource('admin/experiences', ExperienceController::class)->middleware('auth')->names('admin.experiences');
  Route::resource('admin/acomodations', AcommodationController::class)->middleware('auth')->names('admin.acomodations');
  Route::resource('admin/advisories', AdvisoryController::class)->middleware('auth')->names('admin.advisories');
  Route::resource('admin/categoryblogs', CategoryBlogController::class)->middleware('auth')->names('admin.categoryblogs');
  Route::resource('admin/blogs', BlogController::class)->middleware('auth')->names('admin.blogs');
  Route::resource('admin/posts', PostController::class)->middleware('auth')->names('admin.posts');
  Route::resource('admin/categorysights', CategorySightController::class)->middleware('auth')->names('admin.categorysights');
  Route::resource('admin/tags', TagController::class)->middleware('auth')->names('admin.tags');
  Route::resource('admin/sights', SightController::class)->middleware('auth')->names('admin.sights');
  Route::resource('admin/types', TypeController::class)->middleware('auth')->names('admin.types');
  Route::resource('admin/ratios', RatioController::class)->middleware('auth')->names('admin.ratios');
  Route::resource('admin/imagestours', ImageTourController::class)->middleware('auth')->names('admin.imagestours');
  Route::resource('admin/imagesights', ImageSightController::class)->middleware('auth')->names('admin.imagesights');
  Route::resource('admin/locationtours', LocationTourController::class)->middleware('auth')->names('admin.locationtours');
  Route::resource('admin/tours', TourController::class)->middleware('auth')->names('admin.tours');
  Route::resource('admin/days', DayController::class)->middleware('auth')->names('admin.days');
  Route::get('admin/findsight', [SightController::class, 'findSight'])->name('findsight');
  Route::post('admin/searchsight', [SightController::class, 'searchSight'])->name('searchsight');
  Route::get('admin/findimagesight', [ImageSightController::class, 'findImageSight'])->name('findimagesight');
  Route::post('admin/findimagesight', [ImageSightController::class, 'searchImageSight'])->name('searchimagesight');
  Route::get('admin/findcontry', [CountryController::class, 'findCountry'])->name('findcountry');
  Route::post('admin/searchcountry', [CountryController::class, 'searchCountry'])->name('searchcountry');
  Route::resource('admin/contactos-list', ListContactController::class)->names('contactos.list');
  Route::resource('admin/contactos', ContactController::class)->names('contactos');
  Route::resource('admin/contactos-general', GeneralContactController::class)->names('contactos.general');
  Route::resource('admin/contactos-landing', LandingContactController::class)->names('contactos.landing');
  Route::resource('admin/contactos-destinations', DestinationContactController::class)->names('contactos.destination');
  Route::resource('admin/contactos-sight', SightContactController::class)->names('contactos.sight');
  Route::resource('admin/contactos-tour', TourContactController::class)->names('contactos.tour');
  Route::resource('admin/contactos-country', CountryContactController::class)->names('contactos.country');
});








Route::get('pages/check_slug', [PageController::class, 'check_slug'])
  ->name('pages.check_slug');
Route::get('pages/check_slug_title', [PageController::class, 'check_slug_title'])
  ->name('pages.check_slug_title');
Route::get('pages/check_slug_site', [PageController::class, 'check_slug_site'])
  ->name('pages.check_slug_site');
Route::get('get-subregions', [PageController::class, 'getSubregions'])->name('getsubregions');
Route::get('get-countries', [PageController::class, 'getCountries'])->name('getcountries');
