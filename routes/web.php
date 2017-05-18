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
/*
Route::get('/', function () {
    return view('index');
});

Route::get('header', function(){
    return view('header');
});

Route::get('event', function(){
    return view('event');
});

Route::get('eventOverview', function(){
    return view('eventOverview');
});*/

Route::get('/', 'IndexController@getIndex')->name('index');
Route::post('/', 'IndexController@postIndex');

Route::post('contact/idea', 'ContactController@postIdea')->name('postIdea');


Route::get('events', 'EventController@index')->name('events');
Route::get('event/{id}', 'EventController@show')->name('eventShow');


Route::get('signup/{id}', 'SignUpController@getSignUp')->name("signup");
Route::post('signup/{id}', 'SignUpController@postSignUp');


Route::get('gunbanen', function () {
    return view('gunbanen');
});


Route::get('gunbanen/signup',
    ['as' => 'gunbanen_c', 'uses' => 'GunbaanController@create']);
Route::post('gunbanen/signup',
    ['as' => 'gunbaan_signup', 'uses' => 'GunbaanController@signup']);

Route::get('gunbanen/signup', function () {
    return view('gunbanenSignUp');
});

Route::get('nieuws', 'NewsController@index')->name('news');
Route::get('nieuws/{id}', 'NewsController@show')->name('newsShow');

Route::get('underconstruction', function () {
    return view('underconstruction');
});
Route::get('bewoners', function () {
    return view('underconstruction');
});

Route::get('about', function () {
    return view('underconstruction');
});

Route::get('partners', function () {
    return view('partners');
});