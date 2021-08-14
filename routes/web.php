<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'project'], function () {
    Route::get('/',           [ProjectController::class, 'index'])->name('project.index');

    Route::get('/create',           [ProjectController::class, 'create'])->name('project.create');
    Route::get('/{project}',          [ProjectController::class, 'show'])->name('project.show');
    Route::get('/{project}/edit',     [ProjectController::class, 'edit'])->name('project.edit');

    Route::post('',                 [ProjectController::class, 'store'])->name('project.store');
    Route::post('{project}',           [ProjectController::class, 'update'])->name('project.update');
    Route::delete('{project}',        [ProjectController::class, 'destroy'])->name('project.destroy');
});