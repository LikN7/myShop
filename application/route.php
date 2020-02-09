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
use think\Route;
Route::rule('index','index/index/index');

Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

Route::get('api/:version/theme','api/:version.Theme/getSimpleList');

Route::get('api/:version/theme/:id','api/:version.Theme/getCompleOne');

Route::get('api/:version/product','api/:version.Product/getRecent');
Route::get('api/:version/product/by_category','api/:version.Product/getAllInCategory');

Route::get('api/:version/category','api/:version.Category/getAllCategory');

Route::post('api/:version/token/user','api/:version.Token/getToken');
