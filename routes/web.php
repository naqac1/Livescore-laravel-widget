<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivescoreController;


Route::get('/livescore', [LivescoreController::class, 'widget']);