<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//Auth::routes();

if (env('REGISTER_STATE') == 'on'){
  Route::get('register', 'Auth\AuthController@register_view');
  Route::post('register','Auth\AuthController@register')->name('register');
}else{
  Route::get('register', 'Auth\AuthController@unable_register');
}
Route::get('login',    'Auth\AuthController@login_view');
Route::post('login',   'Auth\AuthController@login')->name('login');
Route::get('forget',   'Auth\AuthController@forget_view');
Route::post('forget',  'Auth\AuthController@forget')->name('forget');
Route::get('forget/check','Auth\AuthController@reset');
Route::get('logout',      'Auth\AuthController@logout')->name('logout');

Route::get('pass/reset',       'Auth\AuthController@reset');
Route::get('reset/{token}','Auth\AuthController@reset_with_token');
Route::post('reset_check/{token}',   'Auth\AuthController@reset_check')->name('reset');


Route::group(['middleware'=>'manage'], function (){
  Route::get('/', 'Admin\DashboardController@index');
});

Route::group(['prefix'=>'doc','as'=>'doc','middleware'=>'manage'], function (){

  Route::get('/',       'Doc\DocController@index');
  Route::get('/profile','Doc\DocController@profile');
  Route::get('/friend', 'Doc\DocController@friend');
  Route::get('/frime',  'Doc\DocController@frime');
  Route::get('/comment','Doc\DocController@comment');
  Route::get('/errors', 'Doc\DocController@errors');
});
