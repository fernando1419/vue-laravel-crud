<?php

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
	return view('welcome');
});

Auth::routes();
// Auth::routes(['register' => false]); // disables registration feature.

Route::get('/home', 'HomeController@index')->name('home');
