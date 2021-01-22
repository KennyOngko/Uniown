<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/search/hospital', 'UserController@searchdata')->name('search');
Route::get('/', 'UserController@index');
Route::get('/news', 'UserController@news')->name('news');
Route::get('/news/indonesia', 'UserController@indonews');
Route::get('/news/singapore', 'UserController@singnews');
Route::get('/news/thailand', 'UserController@thainews');
Route::get('/news/malaysia', 'UserController@malaynews');
Route::get('/news/detail/{id}', 'UserController@detailnews')->name('detailNews');
Route::get('/aboutus', 'UserController@aboutus')->name('aboutus');
Route::get('/support', 'UserController@support')->name('support');
Route::get('/search/support', 'UserController@searchsupport')->name('searchsupport');
Route::get('/support/list', 'UserController@listsupport')->name('listsupport');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'member'], function() {
    Route::get('/hospital/list', 'UserController@hospitallist')->name('hospitalList');
    Route::get('/hospital/detail/{id}', 'UserController@detailhospital')->name('detailHospital');
    Route::post('/hospital/detail/{id}', 'UserController@submitschedule');
    
    // Route::get('/scheduleresult','UserController@show');
    // Route::post('/scheduleresult/{hospital}','UserController@show');

    // Route::get('/schedule','UserController@schedule');
    // Route::post('schedule','UserController@submit');

    Route::get('/schedule', 'UserController@schedule')->name('schedule');


    // Route::get('/history','UserController@history');
    // Route::get('/history/{hospital}','UserController@detail');
    // Route::get('/history/{date}','UserController@detail');

    Route::get('/detailhospital/{id}', 'UserController@detailhospital')->name('detailhospital');
});

Route::group(['middleware'=>'admin'], function() {
    //isi route admin
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/addtest', 'AdminController@addtest');
    Route::post('/addtest', 'AdminController@storetest');
});