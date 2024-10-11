<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
  joe
 */
    Route::auth();

   
    Route::get('phpmyinfo', function () {
        phpinfo(); 
    })->name('phpmyinfo');
   
 
    Route::get('/r4d_conference', ['as' => 'r4d_conference.index', 'uses' => 'r4dController@index']);
    Route::get('/r4d_app', ['as' => 'r4d_conference.r4d', 'uses' => 'r4dController@r4d']);


    Route::post('/comment', ['as' => 'saveParticipantProfile2', 'uses' => 'r4dController@send_MailComments']);
    

 