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


//Teachers Controller By Ahmed Al-Rayan
Route::resource('teachers' , 'TeachersController');

//Student homeworks Controller By Ahmed Al-Rayan
Route::resource('student_homeworks' , 'Student_homeworkController');

//Class homeworks Controller By Ahmed Al-Rayan
Route::resource('class_homeworks' , 'Class_homeworkController');
});




//Show all Students
Route::get('/students', 'StudentsContrroller@index')->name('students.index');
//show create && insert db students
Route::get('students/create', 'StudentsContrroller@create')->name('students.create');
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

//students_evaluated Controller By Karar
Route::resource('students_evaluated', 'RatingContrroller');

//Materials By Alaa H. Shareef
Route::resource('materials', 'MaterialController');
//Materials By Alaa H. Shareef
Route::resource('alerts', 'AlertsContrroller');
//Gallery By Alaa H. Shareef
Route::resource('image_gallery', 'Gallery_imagesController');
Route::resource('videos', 'VideoController');


// News & Tables by Hassan
Route::resource('news', 'NewsController');
Route::resource('tables', 'TableController');
<<<<<<< HEAD

Route::get('attendance' , 'AttendeesContrroller@index')->name('attendance.index');
Route::get('attendance\create' , 'AttendeesContrroller@create')->name('attendance.create');
Route::post('attendance\create' , 'AttendeesContrroller@store')->name('attendance.store');
Route::get('attendance\search' , 'AttendeesContrroller@search')->name('attendance.search');
Route::get('attendance\show\{date}' , 'AttendeesContrroller@show')->name('attendance.show');
Route::get('attendance\delete{date}' , 'AttendeesContrroller@delete')->name('attendance.delete');

=======
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
