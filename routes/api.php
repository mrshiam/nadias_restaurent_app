<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/categories/upsert', [CategoryController::class, 'upsert']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
Route::post('/menu-editor/add', [MenuItemController::class, 'store']);