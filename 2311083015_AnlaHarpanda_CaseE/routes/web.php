<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;

Route::get('/', function () {
    return view('welcome');
});

Route::delete('hewan/{id}/permanen',[HewanController::class,'permanen'])->name('hewan.permanen');
Route::get('hewan/{id}/restore',[HewanController::class,'restore'])->name('hewan.pulih');
Route::get('hewan/sampah',[HewanController::class,'trashed'])->name('hewan.sampah');
Route::resource('hewan',HewanController::class);