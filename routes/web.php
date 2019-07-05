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
Auth::routes();





Route::middleware('Admin')->group(function() {
    Route::resource('users', 'UsersController') ;
    Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin');
    Route::get('/users/teacher/{id}', 'UsersController@teacher')->name('users.teacher');
    Route::get('/users/notadmin/{id}', 'UsersController@notAdmin')->name('users.not.admin'); 
});


Route::middleware('AdminAndTeacher')->group(function() {

Route::get('/user/profile', 'ProfilesController@index')->name('users.profile');
Route::post('/user/profile/update', 'ProfilesController@update')->name('users.profile.update');
Route::get('/user/profile/create', 'ProfilesController@create')->name('users.profile.create'); 
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
});




