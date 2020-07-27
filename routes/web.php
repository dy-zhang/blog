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

//----------------------------------------------
//基本路由
/* Route::get('foo', function () {
    return 'Hello World';
}); */

//----------------------------------------------
//默认路由
Route::get('/user', 'User\UserController@index');

//----------------------------------------------
//可用路由
/* Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback); */

/* Route::match(['get', 'post'], '/match', function () {
    return 'match';
});
Route::any('/any', function () {
    return 'any';
}); */

//----------------------------------------------
//重定向
/* Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
Route::permanentRedirect('/here', '/there'); */

//----------------------------------------------
//视图路由
/* Route::view('/test', 'test', ['params' => 'Taylor']); */

//----------------------------------------------
//路由参数
/* Route::get('/info/{name}/{age?}', function($name, $age = 23){
    return $name.'|'.$age;
})->where(['name' => '[a-z]+']);

//路由命名
Route::get('user/userInfo/{id?}', function(){
    return route('rename', ['id' => 2]);
})->name('rename'); */

//----------------------------------------------
//路由组
//中间件
/* Route::middleware(['check:1'])->group(function () {
    Route::get('/check/{age}', function ($age) {
        // 使用 first 和 second 中间件
        return $age;
    });

    Route::get('user/profile', function () {
        // 使用 first 和 second 中间件
    });
}); */

//命名空间
/* Route::namespace('Admin')->group(function () {
    // 在 「App\Http\Controllers\Admin」 命名空间下的控制器
});

//子域名路由
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

//路由前缀
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // 匹配包含 「/admin/users」 的 URL
        return 'prefix';
    });
});
//路由名称前缀
Route::name('admin.')->group(function () {
    Route::get('users_prefix', function () {
        // 指定路由名为 「admin.users」...
        return Route::currentRouteName();
    })->name('users');
}); */

//----------------------------------------------
//路由模型绑定
//隐式绑定
/* Route::get('api/users/{user}', function (App\User $user) {
    return $user->id;
}); */
//自定义键名
/* public function getRouteKeyName()
{
    return 'slug';
} */
//显示绑定

//自定义逻辑解析

//----------------------------------------------
//回退路由
/* Route::fallback(function () {
    return '想啥呢';
}); */

//----------------------------------------------
//限流
/* Route::middleware('throttle:20,1')->group(function () {
    Route::get('/user', function () {
        return '未限流';
    });
}); */
//动态限流
/* Route::middleware('throttle:5,1')->group(function () {
    Route::get('/user/{user}', function (App\User $user) {
        dump($user->rate_limit);
    });
});
//独立访客和认证用户的限流
Route::middleware('auth:api', 'throttle:10|rate_limit,1')->group(function () {
    Route::get('/user', function () {
        //
    });
}); */

//----------------------------------------------
//表单方法伪造

//----------------------------------------------
//访问当前路由
Route::get('/current', 'User\UserController@current');
/* Route::get('/current', function(){
    dump(Route::currentRouteName());
        echo Route::currentRouteName();
        echo Route::currentRounteAction();
}); */


//-----------------------------------------------
//资源路由
Route::resource('img', 'img\ImgController')->names([
    'show' => 'img.show1'
]);



//----------------------------------------------------
//测试
Route::any('/req', "User\UserController@req");