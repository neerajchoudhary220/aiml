<?php

use App\Http\Controllers\ml\TrainModelController;
use Illuminate\Support\Facades\Route;


Route::controller(TrainModelController::class)->prefix('train')->group(function () {
    Route::get('/', 'index');
});
