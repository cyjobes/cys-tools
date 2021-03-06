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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/decrypt-postcard', 'PostcardController@prepare_to_decrypt');
Route::get('/decrypt', 'PostcardController@decrypt');


Route::get('/readpdf', 'MiscController@get_pdf_text');
Route::get('/readdocx', 'MiscController@get_docx_text');

