<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/done', function () {
    return view('done');
});

Route::get('/Ajouter', 'App\Http\Controllers\Lists@show');

Route::get('/showsecret', 'App\Http\Controllers\Lists@showsecret');

Route::get('/activate/{code}', 'App\Http\Controllers\Lists@activate');

Route::get('/deactivate/{code}', 'App\Http\Controllers\Lists@deactivate');


Route::get('/search', 'App\Http\Controllers\Lists@search');

Route::any('/search', 'App\Http\Controllers\Lists@search');


Route::any('/Ajouter/run', 'App\Http\Controllers\Lists@Add');

Route::any('/Ajouter/{id}', 'App\Http\Controllers\Lists@Showbyid');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['middleware' => 'auth'], function () {




});
