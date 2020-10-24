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

// Api Resource for Thoughts
// Route::resource('thoughts', 'API\ThoughtController'); // todos los methodos restful.
Route::apiResource('api/thoughts', 'API\ThoughtController'); // todos los methodos restful salvo edit y create, ideal para APIs.
