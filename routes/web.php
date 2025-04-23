<?php
use  App\Http\Controllers\Controlleur;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

Route::get('/', [Controlleur::class,'show1']);
Route::get('/show1', [Controlleur::class,'show2']);
Route::get('/show2', [Controlleur::class,'show3']);
