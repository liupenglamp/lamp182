<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.login.login');
});
//登录路由
Route::controller('/home/login','Home\LoginController');
//注册路由
Route::controller('/home/user','Home\UserController');
//注册操作
Route::controller('/home/register','Home\RegisterController');
