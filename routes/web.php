<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [App\Http\Controllers\SeriesController::class, 'index']);

Route::get('/series/criar', [App\Http\Controllers\SeriesController::class, 'create']);