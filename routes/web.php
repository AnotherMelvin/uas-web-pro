<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use App\Models\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

Route::get('/', [PageController::class, 'index']);

Route::post('/', function(Request $request) {
    DB::statement("INSERT INTO responses(name, email, message) VALUES(?,?,?)", [$request->name, $request->email, $request->message]);
    return redirect('/');
});

Route::prefix('articles')->group(function () {
    Route::get('/berita', [PageController::class, 'berita']);
    Route::get('/renungan', [PageController::class, 'renungan']);
    Route::get('/{id}/{link}', [ArticleController::class, 'show']);
});

Route::prefix('gallery')->group(function () {
    // Route::get('/', [GalleryController::class, 'show']);
    // Route::get('/{code}', [GalleryController::class, 'open']);
});

Route::prefix('profile')->group(function () {
    Route::get('/sejarah', function() {
        return view('profil.sejarah');
    });
    Route::get('/pastor', function() {
        return view('profil.pastor');
    });
    Route::get('/wilayah', function() {
        return view('profil.wilayah');
    });
    Route::get('/dewan', function() {
        return view('profil.dewan');
    });
});

Route::prefix('download')->group(function () {
    Route::get('/form', function() {
        return view('download.form');
    });
    Route::get('/teks', function() {
        return view('download.teks');
    });
});

Route::middleware(['auth'])->group(function() {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function() {
            return redirect('/dashboard/post');
        });
        Route::resource('/post', ArticleController::class);
        Route::get('/response', function() {
            $responses = Response::all();
            return view('response', ['responses' => $responses]);
        });
        Route::get('/response/{id}', function($id) {
            $response = Response::findOrFail($id);
            return view('responses.show', ['response' => $response]);
        });
    });
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return redirect('/');
});

Route::get('/storage-link', function() {
    $targetFolder = base_path().'/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($targetFolder, $linkFolder);
    return redirect('/');
});

Auth::routes();
