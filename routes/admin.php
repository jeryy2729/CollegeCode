<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

// ............Admin Auth Route................
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin\Auth'], function () {
    Route::get('adminregister', 'RegisterController@showregistrationform')->name('admin.register');
    Route::post('adminregister', 'RegisterController@register')->name('admin.submit.register');
    Route::get('adminlogin', 'LoginController@showloginform')->name('admin.login');
    Route::post('adminlogin', 'LoginController@login')->name('admin.submit.login');
    Route::post('adminlogout', 'LoginController@logout')->name('admin.logout');
});
// ............Admin Dashboard...............
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('admindashboard', 'AdminController@dashboard')->name('admin.dashboard');
});
