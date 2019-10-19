<?php
use Illuminate\Http\Request;


Route::group(['namespace'=>'Api'], function() {
	Route::any('getAllNews/{lang}','ApiController@getAllNews');
	Route::group([
      'middleware' => 'auth:api'
    ], function() {
		
    });

});



