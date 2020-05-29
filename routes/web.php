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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');

//Dashboard
Route::group(['prefix' => 'dashboard', 'name' => 'dashboard.', 'namespace' => 'dashboard'], function () {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController')->except('show');
    Route::resource('permissions', 'PermissionController')->except('show');
    Route::resource('samples', 'SampleController');
    Route::resource('types', 'TypeController')->except('show');
    Route::resource('parametres', 'ParametreController');
    Route::resource('analyses', 'AnalysisController');
    Route::resource('categories', 'CategoryController')->except('show');  
    Route::resource('incidences', 'IncidenceController');
});

Route::get('dashboard/samples/{sample}/analysis', 'dashboard\AnalysisController@index')->name('analyses.index');

Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

//Exports
Route::get('/dashboard/export/sample-export', 'dashboard\SampleController@export')->name('samples.export');
Route::get('/dashboard/export/analysis-export', 'dashboard\AnalysisController@export')->name('analyses.export');
Route::get('/dashboard/export/user-export', 'dashboard\UserController@export')->name('users.export');
Route::get('/dashboard/export/incidence-export', 'dashboard\IncidenceController@export')->name('incidences.export');

//Tasks Management
Route::get('/dashboard/tasks', function () {
    return view('dashboard.tasks.index');
});

//Static web pages
Route::get('/about', array('as' => 'getAboutPage', 'uses' => 'WebController@getAboutPage'));
Route::get('/support', array('as' => 'getSupportPage', 'uses' => 'WebController@getSupportPage'));
Route::get('/contact', array('as' => 'getContactPage', 'uses' => 'WebController@getContactPage'));