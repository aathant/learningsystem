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
Route::get('/','FrontendController@main')->name('main');

Route::get('/subject','FrontendController@subject_home')->name('subject');

Route::get('/detail_subject/{id}','FrontendController@Subject')->name('detail_subject');

Route::get('/student','FrontendController@register')->name('frontendregister');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard',function()
// {
// 	return view("backend.dashboard");
// });
// Route::resource('courses','CourseController');

// Route::resource('mentors','MentorController');
Route::resource('students','StudentController');
Route::group([
	//'name'='backend',
	'middleware'=>'auth',
	'prefix' => 'backend',
	//'namespace'=>'Backend'
	],function() 
{

Route::get('dashboard','BackendController@dashboard');

Route::resource('courses','CourseController');

Route::resource('subjects','SubjectController');

Route::resource('skills','SkillController');

Route::resource('degrees','DegreeController');

Route::resource('batches','BatchController');

Route::resource('trainers','TrainerController');

Route::resource('mentors','MentorController');

Route::resource('groups','GroupController');

Route::resource('homeworks','HomeController');

Route::post('course_batch','GroupController@course_batch')->name('course_batch');

Route::post('batch_student','GroupController@batch_student')->name('batch_student');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/show_batch','BatchController@show_batch')->name('show_batch');
Route::post('/show_student','StudentController@show_student')->name('show_student');



