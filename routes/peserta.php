<?php

Route::group(['prefix'  =>  'peserta'], function () {

    Route::get('login', 'Peserta\LoginController@showLoginForm')->name('peserta.login');
    Route::post('login', 'Peserta\LoginController@login')->name('peserta.login.post');
    Route::get('logout', 'Peserta\LoginController@logout')->name('peserta.logout');
    Route::get('register', 'Peserta\RegisterController@showFormRegister')->name('peserta.register');
    Route::post('register', 'Peserta\RegisterController@register')->name('peserta.register.post');


    Route::group(['middleware' => ['auth:peserta']], function () {

        Route::get('account/orders', 'Peserta\PesertaController@OrderList')->name('peserta.orders');
    });
});


?>