<?php

use App\Http\Controllers\searchBoardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/{str?}', [searchBoardController::class, 'apiSearch']);
