<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Pages\HomePage@getContent');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::get('/dossiers', function () {
    return view('dossiers');
});
//Route::get('/wat', function(){
  //  return phpinfo();
//});

Route::get('/wat', 'Pages\WatPage@setPage');

Route::get('/stuvers', 'Pages\StuverPage@getLedenSR');

Route::get('/raden', 'Pages\RaadPage@getLedenRaden');

Route::get('/galerij', function () {
    return view('galerij');
});
Route::get('/verkiezing', function () {
    return view('verkiezing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/contact', function () {
    return view('contact');
});

//Algemeen Contact formulier
Route::post('algContact', 'Validation\ContactForm@contactPage');
