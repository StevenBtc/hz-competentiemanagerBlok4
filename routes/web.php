<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/competency', function () {
    return view('competency');
});

Route::get('/project', function () {
    return view('project');
});


//Route::get('/userCompetencies/show', 'UserCompetenciesController@show');
//Route::get('/userCompetencies', 'UserCompetenciesController@index');
//Route::post('/userCompetencies/store', 'UserCompetenciesController@store')->name('usercomp.store');
//Route::delete('/userCompetencies/show', 'UserCompetenciesController@destroy')->name('usercomp.destroy');

Route::auth();

Route::get('/dashboard', 'HomeController@index');
Route::get('/demand', 'DemandController@index');

Route::resource('competency', 'CompetencyController');
Route::resource('project', 'ProjectController');
Route::resource('user', 'UserController');
Route::resource('userCompetencies', 'UserCompetenciesController');