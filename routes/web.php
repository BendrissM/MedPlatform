<?php

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

Route::get('/', 'PagesController@vue');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/patient/register', 'PatientController@register')->name('patient.register');
Route::post('/patient/register', 'PatientController@store')->name('patient.create');

Route::get('/medecin/register', 'MedecinController@register')->name('medecin.register');
Route::post('/medecin/register', 'MedecinController@store')->name('medecin.create');



Route::get('/{catchall?}', 'PagesController@vue')->where('catchall', '^(?!api).*$');
