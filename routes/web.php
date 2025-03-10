<?php

use Illuminate\Support\Facades\Route;
use App\Models\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logs', function () {
    $logs = Log::all();
    return view('logs', ['logs' => $logs]);
});
