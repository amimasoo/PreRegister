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

use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/** create test role
 Route::get('/create_role', function (){
    $role = Role::create(['name' => 'writer']);
});
*/


Route::post('/course/add','CourseController@store');
Route::get('/course/add','CourseController@course_formView' );


Route::get('/course/list','CourseController@course_listView');
Route::get('/course/edit/{course}','CourseController@edit');
Route::post('/course/edit/{course}','CourseController@update');
Route::get('/course/delete/{course}','CourseController@destroy');
Route::get('/course/students/{course_id}','CourseController@related_students');
Auth::routes();


Route::get('/student/list','UserController@student_listView');
Route::get('/student/edit/{user}','UserController@edit');
Route::post('/student/edit/{user}','UserController@update');
Route::get('/student/delete/{user}','UserController@destroy');
Route::get('/student/taken_courses/{id}','UserController@student_taken_courses');
Auth::routes();

Route::get('/availableCourses','StudentCourseController@availableCourseView');
Route::post('/availableCourses','StudentCourseController@insertSelectedCourse');

Route::get('/admin/setting','userController@admin_setting');
Route::post('/admin/setting','userController@change_setting');

