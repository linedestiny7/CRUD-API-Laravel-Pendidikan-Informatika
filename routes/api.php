<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HashtagController;
use App\Http\Controllers\HashtagListController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomentarBeritaController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\RiwayatBacaController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\UsersController;
use App\Models\berita;
use App\Models\subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('kategori', [KategoriController::class,'index']);
Route::post('kategori/create', [KategoriController::class,'create']);
Route::get('kategori/destroy/{id}', [KategoriController::class,'destroy']);
Route::post('kategori/update/{id}', [KategoriController::class,'update']);
Route::get('kategori/show/{id}', [KategoriController::class,'show']);

Route::get('subkategori', [SubKategoriController::class , 'index']);
Route::post('subkategori/store', [SubKategoriController::class, 'store']);
Route::post('subkategori/update/{id}', [SubKategoriController::class, 'update']);
Route::get('subkategori/destroy/{id}', [SubKategoriController::class, 'destroy']);
Route::get('subkategori/show/{id}', [SubKategoriController::class, 'show']);

Route::get('users', [UsersController::class, 'index']);
Route::post('users/store', [UsersController::class, 'store']);
Route::post('users/update/{id}', [UsersController::class, 'update']);
Route::get('users/destroy/{id}', [UsersController::class, 'destroy']);
Route::get('users/show/{id}', [UsersController::class, 'show']);

Route::get('pengunjung', [PengunjungController::class, 'index']);
Route::post('pengunjung/store', [PengunjungController::class, 'store']);
Route::post('pengunjung/update/{id}', [PengunjungController::class, 'update']);
Route::get('pengunjung/destroy/{id}', [PengunjungController::class, 'destroy']);
Route::get('pengunjung/show/{id}', [PengunjungController::class, 'show']);

Route::get('hashtag', [HashtagController::class, 'index']);
Route::post('hashtag/store', [HashtagController::class, 'store']);
Route::post('hashtag/update/{id}', [HashtagController::class, 'update']);
Route::get('hashtag/destroy/{id}', [HashtagController::class, 'destroy']);
Route::get('hashtag/show/{id}', [HashtagController::class, 'show']);

Route::get('iklan', [IklanController::class, 'index']);
Route::post('iklan/store', [IklanController::class, 'store']);
Route::post('iklan/update/{id}', [IklanController::class, 'update']);
Route::get('iklan/destroy/{id}', [IklanController::class, 'destroy']);
Route::get('iklan/show/{id}', [IklanController::class, 'show']);

Route::get('berita', [BeritaController::class, 'index']);
Route::post('berita/store', [BeritaController::class, 'store']);
Route::post('berita/update/{id}', [BeritaController::class, 'update']);
Route::get('berita/destroy/{id}', [BeritaController::class, 'destroy']);
Route::get('berita/show/{id}', [BeritaController::class, 'show']);

Route::get('hashtaglist', [HashtagListController::class, 'index']);
Route::post('hashtaglist/store', [HashtagListController::class, 'store']);
Route::post('hashtaglist/update/{id}', [HashtagListController::class, 'update']);
Route::get('hashtaglist/destroy/{id}', [HashtagListController::class, 'destroy']);
Route::get('hashtaglist/show/{id}', [HashtagListController::class, 'show']);

Route::get('riwayatbaca', [RiwayatBacaController::class, 'index']);
Route::post('riwayatbaca/store', [RiwayatBacaController::class, 'store']);
Route::post('riwayatbaca/update/{id}', [RiwayatBacaController::class, 'update']);
Route::get('riwayatbaca/destroy/{id}', [RiwayatBacaController::class, 'destroy']);
Route::get('riwayatbaca/show/{id}', [RiwayatBacaController::class, 'show']);

Route::get('komentarberita', [KomentarBeritaController::class, 'index']);
Route::post('komentarberita/store', [KomentarBeritaController::class, 'store']);
Route::post('komentarberita/update/{id}', [KomentarBeritaController::class, 'update']);
Route::get('komentarberita/destroy/{id}', [KomentarBeritaController::class, 'destroy']);
Route::get('komentarberita/show/{id}', [KomentarBeritaController::class, 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
