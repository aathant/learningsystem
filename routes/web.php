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
Route::group([
	//'name'='backend',
	'middleware'=>'auth',
	'prefix' => 'frontend',
	//'namespace'=>'Backend'
	],function() 
{

Route::get('/group_communication','FrontendController@group_communication')->name('group_communication');

Route::get('/subject','FrontendController@subject_home')->name('subject');

Route::get('/detail_subject/{id}','FrontendController@Subject')->name('detail_subject');

Route::get('/student','FrontendController@register')->name('frontendregister');

Route::get('/teacher','FrontendController@teacher')->name('teacher');

<<<<<<< HEAD
Route::resource('students','StudentController');
Route::resource('marks','MarkController');
=======
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('students','StudentController');
Route::resource('marks','MarkController');

>>>>>>> 6aa0482114ae1764115f094c5bd4f148d980ae77
Route::resource('students','StudentController');

Route::resource('homeworks','HomeworkController');

Route::resource('assignments','AssignmentController');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/group',function(){
// 	return view('frontend.group');
// });

// Route::get('/teacher',function(){
// 	return view('frontend.teacher');
// });

Route::get('/aboutus',function(){
	return view('frontend.aboutus');
});

Route::get('/contact',function(){
	return view('frontend.contact');
});


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard',function()
// {
// 	return view("backend.dashboard");
// });
// Route::resource('courses','CourseController');

// Route::resource('mentors','MentorController');
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

// Route::resource('homeworks','HomeworkController');

Route::post('course_batch','GroupController@course_batch')->name('course_batch');

Route::post('batch_student','GroupController@batch_student')->name('batch_student');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/show_batch','BatchController@show_batch')->name('show_batch');
Route::post('/show_student','StudentController@show_student')->name('show_student');

Route::get('/show_comment','FrontendController@show_comment')->name('show_comment');

Route::get('/show_group','GroupController@show_group')->name('show_group');



