<?php

use Illuminate\Support\Facades\Route;

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
Route::get('hello', 'ControllerName@index1');
Route::get('/demo',function(){
    return 'Đây là demo đầu tiên';
});
Route::controller('/controller','HomeController',['getFirst'=>'first','getSecond'=>'second','postThird'=>'third']);