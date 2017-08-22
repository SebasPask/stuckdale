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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('company')->group(function (){

    Route::get('/login', 'Auth\CompanyLoginController@showLoginForm')->name('company.login');
    Route::post('/login', 'Auth\CompanyLoginController@login')->name('company.login.submit');
    Route::get('/', 'CompanyController@index')->name('company.dashboard');

    // Password reset routes
    Route::post('/password/email', 'Auth\CompanyForgotPasswordController@sendResetLinkEmail')->name('company.password.email');
    Route::get('/password/reset', 'Auth\CompanyForgotPasswordController@showLinkRequestForm')->name('company.password.request');
    Route::post('/password/reset', 'Auth\CompanyResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\CompanyResetPasswordController@showResetForm')->name('company.password.reset');



});
