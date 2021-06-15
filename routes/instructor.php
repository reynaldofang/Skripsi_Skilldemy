<?php

Route::group(['prefix'  =>  'instructor'], function () {

    Route::get('login', 'Instructor\LoginController@showLoginForm')->name('instructor.login');
    Route::post('login', 'Instructor\LoginController@login')->name('instructor.login.post');
    Route::get('logout', 'Instructor\LoginController@logout')->name('instructor.logout');
    Route::get('register', 'Instructor\RegisterController@showFormRegister')->name('instructor.register');
    Route::post('register', 'Instructor\RegisterController@register')->name('instructor.register.post');


    Route::group(['middleware' => ['auth:instructor']], function () {
            Route::view('/about', 'site.pages.about')->name('about');

        Route::group(['prefix' => 'add-class'], function () {
        Route::get('/create', 'Instructor\ListClassController@createClass')->name('instructor.class.create');
        Route::post('listclass', 'Instructor\ListClassController@addClass')->name('instructor.class.add');
        });

        Route::group(['prefix' => 'list-class'], function () {
            Route::get('/', 'Instructor\ListClassController@listClass')->name('instructor.class.list');
        });
    });
});


?>