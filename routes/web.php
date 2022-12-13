<?php

use App\Http\Controllers\searchBoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [searchBoardController::class, 'showTable']);
Route::post('/', [searchBoardController::class, 'searchTable']);
