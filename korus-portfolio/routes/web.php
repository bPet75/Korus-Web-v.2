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

Route::group(['middleware' => 'admin'], function() {
    Route::get('/galeria/create', [GalleryController::class, 'createGallery'])->name('createGallery');
    Route::post('/galeria/update/{id}', [GalleryController::class, 'updateGallery'])->name('updateGallery');
    Route::post('/galeria/store', [GalleryController::class, 'storeGallery'])->name('storeGallery');
    Route::get('/galeria/edit/{id}', [GalleryController::class, 'editGallery'])->name('editGallery');
    Route::post('/galeria/picture/store', [GalleryController::class, 'storePicture'])->name('storePicture');//TODO
    Route::get('/galeria/picture/delete/{id}', [GalleryController::class, 'deletePicture'])->name('deletePicture');
    Route::post('/galeria/video/store', [GalleryController::class, 'storeVideo'])->name('storeVideo');
    Route::post('/galeria/video/delete/{id}', [GalleryController::class, 'deleteVideo'])->name('deleteVideo');
    Route::get('/galeria/delete/{id}', [GalleryController::class, 'deleteGallery'])->name('deleteGallery');
    Route::post('/hirfolyam/letrehoz', [PostController::class, 'create'])->name('createPost');
    Route::post('/hirfolyam/{id}/delete', [PostController::class, 'destroy'])->name('deletePost');
    Route::post('/hirfolyam/{id}/update', [PostController::class, 'update'])->name('updatePost');
    Route::get('/dash', function () { return view('pages/dashboard');});
    Route::get('/post/new', function () {return view('pages/dash_config/createpost');});

    Route::get('/tag/current/edit', [ChoirController::class, 'editCurrent'])->name('editCurrent');
    Route::get('/tag/current/delete/{id}', [ChoirController::class, 'deleteCurrent'])->name('deleteCurrent');
    Route::post('/tag/current/store', [ChoirController::class, 'storeCurrent'])->name('storeCurrent');
    Route::get('/tag/old/edit', [ChoirController::class, 'editOld'])->name('editOld');
    Route::get('/tag/old/delete/{id}', [ChoirController::class, 'deleteOld'])->name('deleteOld');
    Route::post('/tag/old/store', [ChoirController::class, 'storeOld'])->name('storeOld');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ChoirController::class, 'index']);
Route::get('/rolunk', [ChoirController::class, 'index']);
Route::get('/galeria', [GalleryController::class, 'listGallery'])->name('listGallery');
Route::get('/galeria/show/{id}', [GalleryController::class, 'showGallery'])->name('showGallery');

Route::get('/hirfolyam', [PostController::class, 'show'])->name('hirfolyam');
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

/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/welcome', function () {
    return view('pages/welcome');
});
/*Route::get('/login', [UserController::class, 'login']);*/
Route::post('/authenticate', [UserController::class, 'authenticate']);
