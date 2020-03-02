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



Route::get('/profile/{id}','ProfileController@Profile');
Route::get('/me','ProfileController@myProfile');
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');



Route::get('/login','LoginController@CheckLogin');
Route::post('/login','UserController@login');

Route::get('/register','LoginController@CheckRegister');	
Route::post('register','UserController@register');

Route::get('/logout','UserController@logout');

Route::get('/', function () {
  return view('dashboard');
});
Route::get('/profile/{name}', function ($name) {
    echo "Hello ".$name;
});

Route::get('/test', "ResourceController@index" );

Route::prefix('premium')->group(function () {
Route::get('month', "PremiumController@month");
Route::get('six_months', "PremiumController@six_months");
});

Route::prefix('resource')->group(function () {
Route::get('oil', "ResourceController@oil");
Route::get('ore', "ResourceController@ore");
Route::get('diamond', "ResourceController@diamond");
Route::get('uranium', "ResourceController@uranium");
Route::get('cash', "ResourceController@cash");
Route::get('gold', "ResourceController@gold");
});
Route::prefix('generator')->group(function () {
Route::get('/','GeneratorController@main_page');
Route::get('search/{id?}','GeneratorController@id');
Route::post('/','GeneratorController@add');
Route::post('search','GeneratorController@redirect');
});

Route::prefix('edit')->group(function () {
Route::post('premium', "OfferController@premium");
Route::post('gold', "OfferController@gold");
Route::post('resources', "OfferController@resources");

});


Route::get('/gold','GoldController@main_page');

Route::get('404', function () {
  return view('errors.404');
});
?>
