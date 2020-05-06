<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@test');

Route::get('/home/test', 'TestController@test');

// 因為新版的laravel沒有影片中所教的Input的class 所以在google之後替換成request
Route::get('/request', function () {
    $requestTest = Request::get('id', '空白');
    echo $requestTest;
});

Route::group(['prefix' => '/home/test'], function () {
    Route::get('add', 'TestController@add');
    Route::get('del', 'TestController@del');
    Route::get('update', 'TestController@update');
    Route::get('select', 'TestController@select');
});
