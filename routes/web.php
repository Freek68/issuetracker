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
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('issues/create', 'IssuesController@create')->middleware('role:admin');
//Route::get('issues/{id}/EDIT', 'IssuesController@edit')->middleware('role:admin,agent');

Route::get('/issues', 'IssuesController@index')->name('issues.index');
Route::get('/issues/show/{id}', 'IssuesController@show')->name('issues.show');
Route::get('/issues/create', 'IssuesController@create')->name('issues.create');
Route::post('/issues/store', 'IssuesController@store')->name('issues.store');
Route::get('/issues/edit/{id}', 'IssuesController@edit')->name('issues.edit');
Route::post('/issues/update', 'IssuesController@update')->name('issues.update');
Route::post('/issues/destroy', 'IssuesController@destroy')->name('issues.destroy');



Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/show/{id}', 'UserController@show')->middleware('role:admin')->name('users.show');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('/users/update', 'UserController@update')->name('users.update');
Route::post('/users/destroy', 'UserController@destroy')->name('users.destroy');

Route::get('/changes/password', 'ChangesController@change_password')->name('changes.password');
Route::post('/changes/password', 'ChangesController@update_password')->name('changes.update_password');