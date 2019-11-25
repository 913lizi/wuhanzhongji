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
// 注册路由到index模块的News控制器的read操作Developments
Route::rule('index','index/index');
Route::rule('know','Know/index');
Route::rule('developments','Developments/index');
Route::rule('devellist/:id','Developments/Devellist','get');
Route::rule('contact','Contact/index');
Route::rule('product','Sign/index');
Route::rule('products/:id','Sign/geeyolist','get'); // 定义GET请求路由规则
// Route::rule('product_/:id','Sign/mascot','get'); // 定义GET请求路由规则brand
Route::rule('video','Brand/index'); // 定义GET请求路由规则
Route::rule('solution','Brand/solution'); // 定义GET请求路由规则
Route::rule('solutions/:id','Brand/solutionlist','get'); // 定义GET请求路由规则
Route::rule('brand','Brand/geeyolist'); // 定义GET请求路由规则
Route::rule('news','Packaging/index'); // 定义GET请求路由规则
Route::rule('newss/:id','Packaging/geeyolist'); // 定义GET请求路由规则
Route::rule('activity','Packaging/activity'); // 定义GET请求路由规则
Route::rule('customer','Customer/index'); // 定义GET请求路由规则

Route::rule('server','Web/index'); // 定义GET请求路由规则
Route::rule('maintain','Web/maintain'); // 定义GET请求路由规则
Route::rule('maintains/:id','Web/geeyolist','get'); // 定义GET请求路由规则
Route::rule('download','Web/download'); // 定义GET请求路由规则
Route::rule('contact','Web/contact'); // 定义GET请求路由规则
Route::rule('about','Web/about'); // 定义GET请求路由规则
