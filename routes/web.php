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

Route::match(['get', 'post'],'/', 'HomeController@index');
//Route::post('/', 'HomeController@formSubmit')->name('formSubmit');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
//    Route::get('/job_offer', 'JobController@index')->name('jobOffer');
});
