<?php

use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/stagiaires',StagiaireController::class);
Route::delete('/stagiaires/deleteall', [StagiaireController::class, 'deleteAll'])->name('deleteAll');