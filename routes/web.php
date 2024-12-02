<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwbController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('awbs', AwbController::class);

Route::get('/awbs/{awb}/print', [AwbController::class, 'print'])->name('awbs.print');

