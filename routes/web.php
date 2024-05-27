<?php

use App\Http\Controllers\GeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/generator', [GeneratorController::class, 'index']);
