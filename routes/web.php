<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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

Route::get('/',[apiController::class,'jalar'])->name('jalar');
Route::get('/jalar2',[apiController::class,'jalar2'])->name('jalar2');
Route::get('/jalar3',[apiController::class,'jalar3'])->name('jalar3');
