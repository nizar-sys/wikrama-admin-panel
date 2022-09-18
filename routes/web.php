<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\InformasiLinkController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SettingController;
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
Route::get('/', [FrontEndController::class, 'landingPage']);
Route::get('/berita/{judul}', [FrontEndController::class, 'beritaDetail'])->name('berita.detail');
Route::post('/send-message', [MessageController::class, 'store'])->name('send.message');

# ------ Backend routes ------ #
Route::prefix('dashboard')->group(function () {
    require __DIR__ . '/auth.php';

    # ------ Authenticated routes ------ #
    Route::middleware('auth')->group(function () {
        Route::get('/', [RouteController::class, 'dashboard'])->name('home'); # dashboard

        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'myProfile'])->name('profile');
            Route::put('/change-ava', [ProfileController::class, 'changeFotoProfile'])->name('change-ava');
            Route::put('/change-profile', [ProfileController::class, 'changeProfile'])->name('change-profile');
        }); # profile group

        # ------ DataTables routes ------ #
        Route::prefix('data')->name('datatable.')->group(function () {
            Route::get('/users', [DataTableController::class, 'getUsers'])->name('users');
            Route::get('/informasi', [DataTableController::class, 'getInformasi'])->name('informasi');
            Route::get('/informasi-link', [DataTableController::class, 'getInformasiLink'])->name('informasi.links');
            Route::get('/sliders', [DataTableController::class, 'getSliders'])->name('sliders');
            Route::get('/pages', [DataTableController::class, 'getPages'])->name('pages');
            Route::get('/posts', [DataTableController::class, 'getPosts'])->name('posts');
            Route::get('/albums', [DataTableController::class, 'getAlbums'])->name('albums');
            Route::get('/messages', [DataTableController::class, 'getMessages'])->name('messages');
        });

        Route::prefix('settings')->group(function () {
            Route::get('/sosmed', [SettingController::class, 'index'])->name('sosmed.index');
            Route::post('/sosmed', [SettingController::class, 'store'])->name('sosmed.store');

            Route::get('/virtual-wikrama', [SettingController::class, 'indexVirtual'])->name('virtual-wikrama.index');
            Route::post('/virtual-wikrama', [SettingController::class, 'storeVirtual'])->name('virtual-wikrama.store');
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
});

Route::prefix('api')->group(function(){
    Route::get('/pages', [ApiController::class, 'pagesData']);
    Route::get('/sliders', [ApiController::class, 'slidersData']);
    Route::get('/visitors', [ApiController::class, 'visitorsData']);
    Route::get('/news', [ApiController::class, 'newsData']);
});

Route::get('/{page}', [FrontEndController::class, 'pageDetail'])->name('page.detail');