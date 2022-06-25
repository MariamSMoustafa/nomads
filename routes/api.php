<?php

use App\Http\Controllers\Auth\RegisterController;

//use App\Http\Controllers\CompanyController;

use App\Http\Controllers\BookguideController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\companyReviewController;
use App\Http\Controllers\GSearchController;

use App\Http\Controllers\Guide\langcerController;
use App\Http\Controllers\Guide\signupController;
use App\Http\Controllers\guideReviewController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TravellerController;
use App\Http\Controllers\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('registeration', [RegisterController::class, 'ٌRegisteration']);


Route::post('login',[\App\Http\Controllers\Auth\AuthController::class,'Login']);

Route::get('search',[SearchController::class,'search']);
Route::get('search2',[GSearchController::class,'search2']);


Route::middleware(['auth:sanctum'])->group(function () {

});
//Payment
Route::post('pay',[PaymentController::class,'pay']);

//Traveller
Route::post('trav',[TravellerController::class,'trav']);

//Guide
Route::post('gui',[signupController::class,'gui']);

//Trip
Route::post('tri',[TripController::class,'tri']);

//Company
Route::post('comp',[CompanyController::class,'comp']);

//LanuageCertificate
Route::post('langcer',[langcerController::class,'langcer']);

//CompanyReview
Route::post('comprev',[companyReviewController::class,'comprev']);

//GuideReview
Route::post('guirev',[guideReviewController::class,'guirev']);

//BookTrip
Route::post('booktrip',[BookingController::class,'booktrip']);

//BookGuide
Route::post('bookgui',[BookguideController::class,'bookgui']);

//City
Route::post('cit',[CityController::class,'cit']);

//Location
Route::post('locat',[LocationController::class,'locat']);




