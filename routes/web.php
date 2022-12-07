<?php

use App\Http\Controllers\Layout;
use App\Http\Controllers\Page;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[Layout::class,'index']);
Route::controller(Layout::class)->group(function(){
    Route::get('layout/home','home');
    Route::get('layout/index','index');
    Route::get('layout/bergabung','bergabung');
    Route::post('layout/saveBergabung','saveBergabung');
});

Route::get('/',[Page::class,'index']);
Route::controller(Page::class)->group(function(){
    Route::get('pages/index','index');
    Route::get('pages/bergabung','bergabung');
    Route::post('pages/saveBergabung','saveBergabung');
    Route::get('pages/create','create');
    Route::get('pages/read','read');
    Route::get('pages/edit/{id}','edit');    
    Route::post('pages/delete/{id}','delete');  
});