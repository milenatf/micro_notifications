<?php

use App\Jobs\UserRegisteredJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste', function() {

    UserRegisteredJob::dispatch('milena.devweb@gmail.com')->onQueue('queue_notification');

    return response()->json(['status' => 'sucess', 'message' => 'Send email.']);
});

Route::get('/', function() {
    return response()->json(['status' => 'sucess', 'message' => 'Micro notification is runing.']);
});
