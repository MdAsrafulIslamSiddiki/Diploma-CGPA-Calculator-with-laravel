<?php

use App\Http\Controllers\Cgpa_Controller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Cgpa_Controller::class, 'index'])->name('cgpa');
Route::post('/calculate', [Cgpa_Controller::class, 'calculate'])->name('calculate');
// Route::get('/reset', [Cgpa_Controller::class, 'reset'])->name('reset');
