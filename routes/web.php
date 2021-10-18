<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

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

//Route::get('hello', 'App\Http\Controllers\HelloController');
Route::get('hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController@create');
Route::get('hello/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('hello/edit', 'App\Http\Controllers\HelloController@update');
Route::get('hello/del', 'App\Http\Controllers\HelloController@del');
Route::post('hello/del', 'App\Http\Controllers\HelloController@remove');
Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@post');
Route::get('hello/show', 'App\Http\Controllers\HelloController@show');
//Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
//Route::get('test', 'App\Http\Controllers\TestController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
