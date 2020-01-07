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

Route::get('/', 'HomeController@index')->name('home');

//teacher
//teacher dasboard

Route::get('/admin/dashboard','AdminController@dashboard');

//teacher course insertion

Route::get('/admin/course_insertion','AdminController@course_insertion');

Route::post('/admin/course_insertion/add_course','AdminController@add_course');

//teacher course view

Route::get('/admin/course_view','AdminController@course_view');

Route::get('/ajax/admin/edit_course_view','AdminController@edit_course_view');

Route::get('/ajax/admin/view_course_view','AdminController@view_course_view');

//teacher result

Route::get('/admin/admin_result','AdminController@admin_result');

Route::get('/ajax/admin/display_result','AdminController@display_result');


//student
//student dasboard

Route::get('/instructor/dashboard','InstructorController@dashboard');

//student course registration

Route::get('/instructor/course_registration','InstructorController@course_registration');

Route::get('/ajax/instructor/display_course_registration','InstructorController@display_course_registration');

//student result

Route::get('/instructor/instructor_result','InstructorController@instructor_result');

