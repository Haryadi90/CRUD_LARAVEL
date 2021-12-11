<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\pembelianController;




Route::get('/', function () {
    return view('layouts.v_tamplate');
    });
Route::resource('posts/cari', PostController::class);
Route::resource('posts', PostController::class);
Route::resource('pengeluarans',KeluarController::class);
Route::post('/pengeluarans/list_product', [KeluarController::class, 'listProduct']);
Route::resource('pembelians', pembelianController::class);
Route::post('/posts/list_data', [PostController::class, 'list_data']);
