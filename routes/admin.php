<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'Admin\ListclassController@classlist')->name('listclassindex');

        Route::group(['prefix' => 'listclasses'], function () {
            Route::get('/create', 'Admin\ListClassController@createClass')->name('admin.class.create');
            Route::post('listclass', 'Admin\ListClassController@addClass')->name('admin.class.add');
            Route::get('/edit/{id}', 'Admin\ListClassController@edit')->name('admin.class.edit');
            Route::post('/edit/{id}', 'Admin\ListClassController@update')->name('admin.class.update');
            Route::delete('/delete/{id}', 'Admin\ListClassController@delete')->name('admin.class.delete');
            Route::get('/show/{id}', 'Admin\ListClassController@show')->name('admin.class.show');
            Route::get('/{id}/complete', 'Admin\ListClassController@acceptClass')->name('admin.class.accept');
            Route::get('/{id}/decline', 'Admin\ListClassController@declineClass')->name('admin.class.decline');
            Route::get('/{id}/cancel', 'Admin\ListClassController@canceledClass')->name('admin.class.cancel');
        });

        Route::group(['prefix'  =>  'instructor'], function() {
            Route::get('/', 'Admin\InstructorController@instructorlist')->name('admin.instructor.list');
            Route::get('/detail/{id}', 'Admin\InstructorController@detail')->name('admin.instructor.detail');
        });

        Route::group(['prefix'  =>  'peserta'], function() {
            Route::get('/', 'Admin\PesertaController@pesertalist')->name('admin.peserta.list');
        });

        Route::group(['prefix'  =>  'category'], function() {
            Route::get('/', 'Admin\CategoryController@categorylist')->name('admin.category.list');
            Route::get('/create', 'Admin\CategoryController@categorycreate')->name('admin.category.create');
            Route::post('category', 'Admin\CategoryController@addClass')->name('admin.category.add');
            Route::get('/detail/{id}', 'Admin\CategoryController@detail')->name('admin.category.detail');
            Route::get('/edit/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
            Route::post('/edit/{id}', 'Admin\CategoryController@update')->name('admin.category.update');
            Route::delete('/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
        });

        Route::group(['prefix'  =>  'order'], function() {
            Route::get('/', 'Admin\OrderController@orderlist')->name('admin.order.list');
        });
        
    });
});

?>