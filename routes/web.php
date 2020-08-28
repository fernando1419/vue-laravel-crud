<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function ()
{
	return view('welcome');
});

Auth::routes();
// Auth::routes(['register' => false]); // disables registration feature.

Route::get('/home', 'HomeController@index')->name('home');
