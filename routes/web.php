<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\InformasiLinkController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SliderController;

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

# ------ Unauthenticated routes ------ #
Route::get('/', [AuthenticatedSessionController::class, 'create']);
require __DIR__.'/auth.php';


# ------ Authenticated routes ------ #
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [RouteController::class, 'dashboard'])->name('home'); # dashboard

    Route::prefix('profile')->group(function(){
        Route::get('/', [ProfileController::class, 'myProfile'])->name('profile');
        Route::put('/change-ava', [ProfileController::class, 'changeFotoProfile'])->name('change-ava');
        Route::put('/change-profile', [ProfileController::class, 'changeProfile'])->name('change-profile');
    }); # profile group

    # ------ DataTables routes ------ #
    Route::prefix('data')->name('datatable.')->group(function(){
        Route::get('/users', [DataTableController::class, 'getUsers'])->name('users');
        Route::get('/informasi', [DataTableController::class, 'getInformasi'])->name('informasi');
        Route::get('/informasi-link', [DataTableController::class, 'getInformasiLink'])->name('informasi.links');
        Route::get('/sliders', [DataTableController::class, 'getSliders'])->name('sliders');
        Route::get('/pages', [DataTableController::class, 'getPages'])->name('pages');
        Route::get('/posts', [DataTableController::class, 'getPosts'])->name('posts');
        Route::get('/albums', [DataTableController::class, 'getAlbums'])->name('albums');
        Route::get('/messages', [DataTableController::class, 'getMessages'])->name('messages');
    });
    
    Route::resource('users', UserController::class);
    Route::resource('informasis', InformasiController::class);
    Route::resource('informasi-link', InformasiLinkController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('pages', PageController::class);
    Route::resource('posts', PostController::class);
    Route::resource('albums', AlbumController::class);
    Route::resource('messages', MessageController::class);
});
