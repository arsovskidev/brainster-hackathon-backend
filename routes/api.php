<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1', 'middleware' => ['throttle:60,1']], function () {
    Route::get('/projects',      [ProjectController::class, 'index']);
    Route::get('/projects/{id}', [ProjectController::class, 'show']);
    Route::get('/news',          [NewsController::class, 'index']);
    Route::get('/news/{id}',     [NewsController::class, 'show']);
    Route::get('/services',      [ServiceController::class, 'index']);

    Route::get('/contact',      [ContactController::class, 'store']);
});
