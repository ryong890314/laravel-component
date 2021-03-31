<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\ManageController;
use App\Http\Controllers\BoardController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/manage', [ManageController::class, 'index'])->middleware('can:isAdmin')->name('manage.show');
Route::get('/manage/edit/{id}', [ManageController::class, 'edit'])->middleware('can:isAdmin')->name('manage.edit');
Route::post('/manage/update', [ManageController::class, 'update'])->middleware('can:isAdmin')->name('manage.update');

// Route::get('/board', [BoardController::class, 'manage'])->name('board.manage');
Route::get('/board', [BoardController::class, 'index'])->name('board.show');
Route::get('/board/manage', [BoardController::class, 'manage'])->name('board.manage');
Route::get('/board/create', [BoardController::class, 'create'])->name('board.create');
Route::post('/board/store', [BoardController::class, 'store'])->name('board.store');
Route::get('/board/edit/{id}', [BoardController::class, 'edit'])->name('board.edit');
Route::post('/board/update', [BoardController::class, 'update'])->name('board.update');
Route::delete('/board/destroy/{id}', [BoardController::class, 'destroy'])->name('board.destroy');
