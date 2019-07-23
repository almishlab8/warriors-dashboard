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


//Teachers Controller
Route::resource('teachers' , 'TeachersController');
});




//Show all Students
Route::get('students/all', 'StudentsContrroller@index')->name('students.all');
//show create && insert db students
Route::get('students/allstudents', 'StudentsContrroller@create')->name('students.allStudents');
Route::post('students/store', 'StudentsContrroller@store')->name('students.store');
//edit Students
Route::get('students/edit/{id}', 'StudentsContrroller@edit')->name('students.edit');
Route::post('students/update/{id}', 'StudentsContrroller@update')->name('students.update');
//deleted Students
Route::get('students/destroy/{id}', 'StudentsContrroller@destroy')->name('students.destroy');
//show Classes && Students
Route::get('students/merge', 'StudentsContrroller@merge')->name('students.merge');
//add Students to classes
Route::post('/students/mergestore', 'StudentsContrroller@mergestore')->name('students.mergestore');
//show classes
Route::get('classes/showclasses', 'ClassesContrroller@index')->name('classes.showclasses');
//classes deleted
Route::get('classes/destroy/{id}', 'ClassesContrroller@destroy')->name('classes.destroy');

//add class
Route::get('classes/addclass/', 'ClassesContrroller@create')->name('classes.addclass');
Route::post('classes/store', 'ClassesContrroller@store')->name('classes.store');


// News by Hassan
Route::get('/news','NewsController@index')->name('news');
Route::get('/news/create','NewsController@create')->name('news.create');
Route::post('/news/store','NewsController@store')->name('news.store');
Route::get('/news/edit/{id}','NewsController@edit')->name('news.edit');
Route::post('/news/update/{id}','NewsController@update')->name('news.update');
Route::get('/news/delete/{id}','NewsController@destroy')->name('news.delete');