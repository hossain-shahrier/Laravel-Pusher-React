<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::post('/messages',[ChatController::class,'message']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
