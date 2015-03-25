<?php

/**/

//Event::Listen('Larabook.Registration.Events.UserRegistered', function($event)
//{
//    dd('sen a notification email');
//});

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);
