<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChoirController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ChoirController::class, 'index']);
Route::get('/rolunk', [ChoirController::class, 'index']);
Route::get('/galeria', [GalleryController::class, 'listGallery'])->name('listGallery');
Route::get('/galeria/show/{id}', [GalleryController::class, 'showGallery'])->name('showGallery');
Route::get('/galeria/create', [GalleryController::class, 'createGallery'])->name('createGallery');
Route::post('/galeria/store', [GalleryController::class, 'storeGallery'])->name('storeGallery');
Route::get('/galeria/edit/{id}', [GalleryController::class, 'editGallery'])->name('editGallery');
Route::get('/galeria/delete/{id}', [GalleryController::class, 'deleteGallery'])->name('deleteGallery');

Route::get('/hirfolyam', [PostController::class, 'show'])->name('hirfolyam');
Route::post('/hirfolyam/letrehoz', [PostController::class, 'create'])->name('createPost');
Route::post('/hirfolyam/{id}/delete', [PostController::class, 'destroy'])->name('deletePost');
Route::post('/hirfolyam/{id}/update', [PostController::class, 'update'])->name('updatePost');
Route::get('/hirfolyam/{id}', [PostController::class, 'showOnePost']);
Route::get('/hirfolyam/{page}', [PostController::class, 'pageForward']);


Route::get('/kapcsolat', function () {
    return view('pages/contact');
});

Route::get('/ersek', function () {
    return view('pages/profiles/ersek');
});

Route::get('/szilvia', function () {
    return view('pages/profiles/szilvia');
});

Route::get('/hhm', function () {
    return view('pages/profiles/hhm');
});

Route::get('/korus', function () {
    return view('pages/profiles/choir');
});

Route::get('/cke', function () {
    return view('cke_editor');
});

Route::get('/dash', function () {
    return view('pages/dashboard');
});

Route::get('/post/new', function () {
    return view('pages/dash_config/createpost');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('pages/welcome');
});
Route::get('/login', [UserController::class, 'login']);
Route::post('/authenticate', [UserController::class, 'authenticate']);