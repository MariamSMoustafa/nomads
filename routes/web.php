<?php


use Illuminate\Support\Facades\Route;
use App\User;
use App\Http\Controllers\SearchController;
use Symfony\Component\Console\Input\Input;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/home', 'Auth\AuthController@home')->name('home');


Route::get('/register1', 'Guide\signupController@register1')->name('register1');
Route::post('/register1', 'Guide\signupController@storeUser1');

Route::get('/register2', 'Guide\langcerController@register2')->name('register2');
Route::post('/register2', 'Guide\langcerController@storeUser2');

Route::get('/addCompany', 'Company\CompanyController@addCompany')->name('addCompany');
Route::post('/addCompany', 'Company\CompanyController@storeCompany');

Route::post('/results', 'CompanyRequest\CompanyController@storeCompany');
Route::get('/results', function () {
    return view('welcome');
});

Route::get('/payment', 'PaymentController@payment1')->name('payment');
Route::post('/payment', 'PaymentController@payment2');


