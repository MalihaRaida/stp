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

//teacher course view

Route::get('/admin/course_view','AdminController@course_view');

//teacher result

Route::get('/admin/admin_result','AdminController@admin_result');


//student
//student dasboard

Route::get('/instructor/dashboard','InstructorController@dashboard');

//student course registration

Route::get('/instructor/course_registration','InstructorController@course_registration');

//student result

Route::get('/instructor/instructor_result','InstructorController@instructor_result');
