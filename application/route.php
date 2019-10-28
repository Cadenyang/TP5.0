<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('api/v1/banner/:id', 'api/v1.Banner/getBanner');

Route::get('api/v1/Theme/', 'api/v1.Theme/getSimpleList');

Route::get('api/v1/Theme/:id', 'api/v1.Theme/getComplexOne');




