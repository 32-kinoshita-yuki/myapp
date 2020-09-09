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

Route::get('/', function () {
    return view('welcome');
});


//influencer
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('influencer/delete', 'Admin\InfluencerController@delete');
    Route::get('influencer/update', 'Admin\InfluencerController@update');
    Route::post('influencer/create', 'Admin\InfluencerController@create');
});

//インフルエンサーの会員登録
Route::get('auth/influencer/register','Auth\Influencer\RegisterController@showRegisterationForm');
Route::post('auth/influencer/register','Auth\Influencer\RegisterController@register');
//依頼者の会員登録
Route::get('auth/register','Auth\RegisterController@showRegisterationForm');
Route::post('auth/register','Auth\RegisterController@register');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

