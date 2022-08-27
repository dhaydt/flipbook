<?php

use App\Http\Controllers\FlipController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});

Route::get('/', [FlipController::class, 'index'])->name('home');

Route::post('img', [FlipController::class, 'generate'])->name('generate');
Route::get('list', [FlipController::class, 'list'])->name('list');
Route::get('details/{id}', [FlipController::class, 'details'])->name('details');
