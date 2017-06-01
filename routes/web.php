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


Route::get('gunbanen', ['uses' => 'GunbaanController@index'], function () {
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

Route::get('partners', 'PartnerController@getIndex');


Route::get('about', 'OverOnsController@getIndex');

Auth::routes();

Route::get('/beheerder', 'AdminController@index')->name('beheerder');


Route::get('/logout', 'AdminController@logout')->name('beheerder');

// edit routes

Route::get('/editnews', 'EditController@newsindex')->name('beheerder');

Route::get('/addnews', 'EditController@addnews')->name('beheerder');

Route::get('changenews/{id}', 'EditController@changenews')->name('changenews');
Route::get('deletenews/{id}', 'EditController@deletenews')->name('deletenews');

Route::post('updatenews',
    ['as' => 'updatenews', 'uses' => 'EditController@updatenews']);

Route::post('/addnews',
    ['as' => 'createnews', 'uses' => 'EditController@createnews']);


Route::get('/editevent', 'EditController@eventindex')->name('beheerder');

Route::get('/addevent', 'EditController@addevent')->name('beheerder');

Route::get('signupsevent/{id}', 'EditController@signupsevent')->name('signupsevent');
Route::get('changeevent/{id}', 'EditController@changeevent')->name('changeevent');
Route::get('deleteevent/{id}', 'EditController@deleteevent')->name('deleteevent');

Route::post('updateevent',
    ['as' => 'updateevent', 'uses' => 'EditController@updateevent']);

Route::post('/addevent',
    ['as' => 'createevent', 'uses' => 'EditController@createevent']);

Route::get('/editsponsor', 'EditController@editsponsor')->name('beheerder');



Route::get('/editpages', 'PageEditController@index')->name('beheerder');

Route::get('/editpage/{page}', ['uses' =>'PageEditController@editpage']);

Route::post('/updatepagecontent',
    ['as' => 'updatepagecontent', 'uses' => 'PageEditController@updatepagecontent']);


