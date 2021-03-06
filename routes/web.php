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


Route::get('crop-image', 'ImageCropController@index');
Route::post('crop-image', ['as'=>'croppie.upload-image','uses'=>'ImageCropController@imageCrop']);

Route::get('posts', 'PostController@index');


Route::get('file-upload', ['as'=>'file.upload','uses'=>'PostController@fileUpload']);
Route::post('file-upload', ['as'=>'post.file.upload','uses'=>'PostController@postFileUpload']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('gray-scale-image', 'ImageController@grayScaleImage');
Route::post('gray-scale-image',['as'=>'gray.scale.image','uses'=>'ImageController@grayScaleImagePost']);