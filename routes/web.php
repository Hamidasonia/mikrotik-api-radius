<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MikrotikController;

Route::get('/', [MikrotikController::class, 'index']);
