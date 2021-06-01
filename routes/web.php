<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'ListclassController@index')->name('workshop');


Route::view('/about', 'site.pages.about')->name('about');

Route::get('/account-register', 'PesertaController@create')->name('pesertacreate');

Route::post('/account-register', 'PesertaController@save')->name('pesertasave');


Route::get('/admin/account/{id}/delete', 'PesertaController@delete')->name('pesertadelete');

Route::get('/account', function () {
    return view('auth/login');
});


Route::get('/edit-class-instructor', function(){
    return view('instructor/edit');
});

Route::get('/detail-class', function(){
   return view('site/pages/detail'); 
});

Route::get('/detail-order', function(){
    return view('site/order/detail');
});

Route::get('/instructor-login', 'Instructor\LoginController@Indexlogin')->name('instructor.login');


Route::get('/instructor-register', 'InstructorController@create')->name('instructorcreate');

Route::post('/instructor-register', 'InstructorController@save')->name('instructorsave');

Route::get('/instructor/class-register', 'ListClassController@createByInstructor')->name('listclass.create.instructor');

Route::post('/instructor/class-register', 'ListclassController@savebyInstructor')->name('listclass.save.instructor');




Route::get('load-more-date', 'ListclassController@more_data');

Route::get('/admin/instructor', 'InstructorController@instructorlist')->name('instructorindex');

Route::get('/admin/instructor/edit/{id}', 'InstructorController@edit')->name('instructoredit');

Route::post('/admin/instructor/edit/{id}', 'InstructorController@update')->name('instructorupdate');



Route::get('/admin/class/create', 'ListclassController@createByAdmin')->name('listclass.create.admin');

Route::post('/admin/class', 'ListclassController@savebyAdmin')->name('listclasssave');

Route::get('/admin/class/edit/{id}', 'ListclassController@edit')->name('listclassedit');

Route::post('/admin/class/edit/{id}', 'ListclassController@update')->name('listclassupdate');

Route::get('/admin/class/{id}/delete', 'ListclassController@delete')->name('listclassdelete');



Route::get('/admin/account', 'PesertaController@index')->name('pesertaindex');

Route::get('/login-admin', 'LoginController@showFormLogin')->name('login');
Route::post('/login-admin', 'LoginController@login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', 'ListclassController@classlist')->name('listclassindex');
    Route::get('logout', 'LoginController@logout')->name('logout');
});
