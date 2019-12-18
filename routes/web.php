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


Route::group(['namespace'=>'Home'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

});
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::group(['middleware'=> ['auth'],'namespace'=>'Admin','prefix'=>'admin'],function(){

    // 后台首页
    Route::get('/','IndexController@index');
    //网站设置
    Route::get('web/settings','SettingsController@index');
    Route::post('web/settings/post','SettingsController@create');
    //网站banner设置
    Route::get('web/banner','BannerController@index');
    Route::get('web/banner/create','BannerController@create');
    Route::post('web/banner/upload','BannerController@upload');
    Route::post('web/banner/store','BannerController@store');
    Route::get('web/banner/del/{id}','BannerController@del');
    Route::get('web/banner/edit/{id}','BannerController@edit');
    Route::post('web/banner/update','BannerController@update');
    //网站类型管理
    Route::get('web/webType','WebTypeController@index');
    Route::get('web/webType/create','WebTypeController@create');
    Route::post('web/webType/store','WebTypeController@store');
    Route::get('web/webType/edit/{id}','WebTypeController@edit');
    Route::post('web/webType/update','WebTypeController@update');
    Route::get('web/webType/del/{id}','WebTypeController@del');

    Route::resource('dashboard','DashboardController');

    Route::resource('user','UserController');

});


