<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Layout;
use App\Http\Controllers\PageController;
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
Route::get('/',[PageController::class,'index']);
Route::controller(PageController::class)->group(function(){
    Route::get('halaman/main','index');
    Route::get('halaman/bergabung','bergabung');
    Route::post('halaman/saveBergabung','saveBergabung');
});

Route::resource('pages', BeritaController::class);
