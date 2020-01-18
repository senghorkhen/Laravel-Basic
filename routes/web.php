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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hor', function () {
//     return "<h1> Hello Laravel 2020</h1>";
// });

// Route::get('/{id}', function ($id) {
//     return $id;
// });


// Route::get('/{id}/{name}', function ($id,$name) {
// return "This is id: ".$id."and this is name: " .$name;
// });

// Route::get('/', function() {
//     return view('pages.index'); // (/) it will call index
// });

// Route::get('/about', function() {
//     return view('pages.about');
// });

// Route::get('/contact', function() {
//     return view('pages.contact');
// });

// How to larave access file
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact'); // function muy na del yg jg access to PagesController