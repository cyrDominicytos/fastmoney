<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;





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
   return view('layouts/landing/index');
});

Route::get('/home', function () {
     return view('layouts/landing/index');
})->name('home');
Route::get('/service', function () {
     return view('layouts/landing/services');
})->name('service');

Route::get('/about', function () {
     return view('layouts/landing/about');
})->name('about');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\OffreController@offre')->name('dashboard');





Route::get('/retirer', 'App\Http\Controllers\DashController@retirer')->name('retirer');
Route::post('/submit_retirer', 'App\Http\Controllers\DashController@submit_retirer')->name('submit_retirer');

Route::get('/myProfil', 'App\Http\Controllers\DashController@myProfil')->name('myProfil');
Route::post('/profil_update', 'App\Http\Controllers\DashController@profil_update')->name('profil_update');


Route::get('/buy', 'App\Http\Controllers\DashController@buy')->name('buy');
Route::get('/indication', 'App\Http\Controllers\DashController@indication')->name('indication');
Route::get('/retrait', 'App\Http\Controllers\DashController@retrait')->name('retrait');
Route::get('/depot', 'App\Http\Controllers\DepotController@depot')->name('depot');

//offert
Route::get('/offre', 'App\Http\Controllers\OffreController@offre')->name('offre');
Route::post('/annuler_offre', 'App\Http\Controllers\OffreController@annuler_offre')->name('annuler_offre');
Route::post('/regle_offre', 'App\Http\Controllers\OffreController@regle_offre')->name('regle_offre');
Route::post('/acheter', 'App\Http\Controllers\OffreController@acheter')->name('acheter');

//API
Route::get('/ckecked/{data}', 'App\Http\Controllers\OffreController@ckecked')->name('ckecked');
//Route::get('/check', 'App\Http\Controllers\OffreController@check')->name('check');
//Route::get('/check2', 'App\Http\Controllers\OffreController@check2')->name('check2');
Route::get('check', ['as' => 'check', 'uses' => 'App\Http\Controllers\OffreController@check']);
Route::get('callback', ['as' => 'callback', 'uses' => 'App\Http\Controllers\OffreController@callback']);

Route::get('/unsubscribe', function () {
     echo "toto";
})->name('unsubscribe');

//return URL::signedRoute('unsubscribe', ['user' => 1]);


Route::namespace('\App\Http\Controllers\Auth')->group(function () {
  Route::get('/login','LoginController@show_login_form')->name('login');
  Route::post('/login','LoginController@process_login')->name('login');
  Route::get('/register','LoginController@show_signup_form')->name('register');
  Route::get('/parrain/{id}','LoginController@show_signup_form2')->name('parrain');
  Route::post('/register','LoginController@process_signup');
  Route::post('/logout','LoginController@logout')->name('logout');
});