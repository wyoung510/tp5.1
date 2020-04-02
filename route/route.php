<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('/', 'index/index/say_my_happy');
Route::rule('index/:name$', 'index/index/hello','get');
Route::rule('edt/:id$', 'index/index/edit','get');

//Route::get('/', function () {
//	return 'hello,ThinkPHP5!';
//});
//Route::get('hello/:name', function ($name) {
//	return 'Hello,' . $name;
//});
//
//Route::get('hello/:name', 'index/hello');
//
return [

];
