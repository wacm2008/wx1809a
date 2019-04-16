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
Route::get('/info', function () {
    phpinfo();
});

//微信首次连接
Route::get('/weixin/valid','weixin\WxController@valid');
//接收微信服务推送
Route::post('/weixin/valid','weixin\WxController@valide');
Route::get('/weixin/accesstoken','weixin\WxController@getAccessToken');
//微信菜单测试
Route::get('/weixin/atoken','weixin\WxController@getaToken');
//微信菜单创建
Route::get('/weixin/createmenu','weixin\WxController@createMenu');
Route::get('/weixin/test','weixin\WxController@test');
//微信群发
Route::get('/weixin/send','weixin\WxController@send');