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
//upload
Route::get('/upload', 'UploadController@upload')->name('upload');
Route::post('/upload/proses', 'UploadController@proses_upload')
    ->name('upload.proses');

    //Resize
Route::post('/upload/resize', 'UploadController@resize_upload')
    ->name('upload.resize');
//Dropzone
Route::get('/dropzone', 'UploadController@dropzone')
    ->name('dropzone');
Route::post('/dropzone/store', 'UploadController@dropzone_store')
    ->name('dropzone.store');
// pdf 
Route::get('/pdf_upload', 'UploadController@pdf_upload')
    ->name('pdf.upload');
Route::post('/pdf/store', 'UploadController@pdf_store')
    ->name('pdf.store');