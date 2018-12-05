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


/* 將 Route 取名為 hello.index */
Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello '.$name;
}]);

/* 設定Route 以群組包起來設定 prefix */
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return 'admin dashboard';
    });
});

/* 將 Route 的內容搬至 Controller 內 */
Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);

    

    


