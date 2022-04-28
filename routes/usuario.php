<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuario\usuarioController;

Route::get('', [usuarioController::class, 'index']);