<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

//TRASH
Route::get('tools/trash', [ToolController::class, 'trash'])->name('tools.trash.index');
Route::patch('tools/{tool}/restore', [ToolController::class, 'restore'])->name('tools.trash.restore');
Route::delete('tools/{tool}/definitive-delete', [ToolController::class, 'definitiveDelete'])->name('tools.trash.definitive-delete');

//CRUD METHODS
Route::resource('tools', ToolController::class);

