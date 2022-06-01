<?php

use App\Http\Controllers\Auth\RegisterController;
//use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Company\CompanyController;
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

//Route::post('guideregister', [\App\Http\Controllers\Guide\signupController::class, 'GuideRegister']);
//Route::post('company', [CompanyController::class, 'companyrequest']);



Route::post('login',[\App\Http\Controllers\Auth\AuthController::class,'Login']);

Route::middleware(['auth:sanctum'])->group(function () {


});