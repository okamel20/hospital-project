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

Route::get('/', 'HomeController@indexHome');
Route::get('/page/{id}', 'HomeController@page');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@postContact');
Route::get('/doctors', 'HomeController@doctors');
Route::get('/doctor/{id}', 'HomeController@doctor');
Route::post('/bookAppointment/{id}', 'HomeController@bookAppointment');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog/{id}', 'HomeController@blogId');
Route::get('/services', 'HomeController@services');
Route::get('/clinics', 'HomeController@clinics');
Route::get('/pharmacy', 'HomeController@pharmacy');
Route::get('/offers', 'HomeController@offers');
Route::post('/orders', 'HomeController@orders');

Route::get('lang/{lang}',function($lang){
	App::setLocale($lang);
	session()->has('lang')?session()->forget('lang'):App::getLocale();
	$lang == 'ar'?session()->put('lang','ar'):session()->put('lang','en');
	return back();
});

