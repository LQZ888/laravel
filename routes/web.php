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
  //可以分组
/*Route::group([],function(){

})
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*  测试*/
Route::get('/admin/{id}', function ($id) {
	echo "测试**";
	echo $id;
    // return view('welcome');
})->where('id','\d+');
Route::get('/adfaf', function () {

    return '测试页面';
})->name('admin');  //别名
Route::get('/cs', function () {
					 //跳转别名地方
    return  '<a href="'.route('admin').'">测试</a>';
});
