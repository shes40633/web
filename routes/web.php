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


Route::get('/', 'frontcontroller@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'AdminController@index');

    // 刪除vscode裡的圖片
    Route::post('/ajax_upload_img', 'AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img','AdminController@ajax_delete_img');

    Route::get('movies', 'moviesController@index');
    Route::get('movies/create', 'moviesController@create');
    Route::post('movies/store', 'moviesController@store');
    Route::get('movies/edit/{id}', 'moviesController@edit');
    Route::post('movies/update/{id}', 'moviesController@update');
    Route::post('movies/destroy/{id}', 'moviesController@destroy');


    Route::get('comings', 'comingController@index');
    Route::get('comings/create', 'comingController@create');
    Route::post('comings/store', 'comingController@store');
    Route::get('comings/edit/{id}', 'comingController@edit');
    Route::post('comings/update/{id}', 'comingController@update');
    Route::post('comings/destroy/{id}', 'comingController@destroy');

    Route::get('jobs', 'jobsController@index');
    Route::get('jobs/create', 'jobsController@create');
    Route::post('jobs/store', 'jobsController@store');
    Route::get('jobs/edit/{id}', 'jobsController@edit');
    Route::post('jobs/update/{id}', 'jobsController@update');
    Route::post('jobs/destroy/{id}', 'jobsController@destroy');

});




