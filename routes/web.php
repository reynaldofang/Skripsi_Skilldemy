<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Site\HomepageController@show')->name('homepage');



Route::get('/category-class/{slug}', 'Site\ListClassController@listClass')->name('listclass.category');



Route::get('/class/{slug}', 'Site\ListClassController@show')->name('listclass.show');





Auth::routes();

require 'admin.php';
require 'instructor.php';
require 'peserta.php';