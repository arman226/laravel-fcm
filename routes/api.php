<?php

use App\Http\Controllers\FirebasePushController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('setToken', [FirebasePushController::class, 'setToken'])->name('firebase.token');

Route::post('send/notif', [FirebasePushController::class, 'notification'])->name('firebase.token');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
