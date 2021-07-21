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


Route::get('/', 'PageController@index');

    Route::get('/doctor/{id}', 'DoctorController@show')->name('doctor.show');
    Route::get('/department/{id}', 'DepartmentController@show')->name('department.show');
    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::group(['prefix'=>'/' ], function(){
    Route::get('about', 'PageController@about')->name('about');
    Route::get('services', 'PageController@services')->name('services');

    Route::get('/ajax', 'PageController@ajax')->name('ajax');

});

Route::get('/register', 'AuthController@registerForm')->name('register');
Route::post('/register', 'AuthController@register');
Route::get('/login','AuthController@loginForm')->name('login');
Route::post('/login', 'AuthController@login');

        Route::group(['middleware'	=>	'auth'], function(){
        Route::delete('/record/{id_record}/destroy', 'RecordController@destroy')->name('record.destroy');
        Route::get('/record', 'RecordController@record')->name('record');
       // Route::get('/selectDateTime/{doctor_id}', 'RecordController@selectDateTime')->name('selectDateTime');
        Route::post('/record/update/{id}', 'RecordController@update')->name('record_update');
        Route::get('/send', 'RecordController@send')->name('send');
});

    Route::group(['namespace'=>'Admin','prefix'=>'admin', 'middleware'	=>	'admin'], function() {
	Route::get('/', 'DashboardController@index')->name('admin');
	Route::resource('/departments', 'DepartmentsController');
	Route::resource('/users', 'UsersController');
	Route::resource('/doctors', 'DoctorsController');
	Route::resource('/records', 'RecordAdminController');
	Route::delete('/doctors/{id}/destroy', 'DoctorsController@destroy')->name('doctor.destroy');
    Route::delete('/record/{id}/destroy', 'RecordAdminController@destroy')->name('recordAdmin.destroy');
});

