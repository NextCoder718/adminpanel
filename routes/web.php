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

Route::get('/', 'LeadController@create')->name('leads.create');
Route::post('leads', 'LeadController@store')->name('leads.store');

// Authentication Routes...
Route::get('admin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin', 'Auth\LoginController@login')->name('login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

/*// Registration Routes...
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/leads', 'LeadController@index')->name('admin.leads.index');
    Route::get('admin/leads/{id}/edit', 'LeadController@edit')->name('admin.leads.edit');
    Route::put('admin/leads/{id}', 'LeadController@update')->name('admin.leads.update');
    Route::delete('admin/leads/{id}', 'LeadController@destroy')->name('admin.leads.delete');

    Route::resource('admin/producers','ProducerController')->parameter('producers','id')->names('admin.producers')->except(['show']);
    Route::resource('admin/agents','AgentController')->parameter('agents','id')->names('admin.agents')->except(['show']);
});
