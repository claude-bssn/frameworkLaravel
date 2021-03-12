<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DrawerController;
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

Route::get('/', [NavController::class, 'home']);
Route::get('/characters', [NavController::class, 'characters']);
Route::get('/about/{id}', [NavController::class, 'about']);
Route::get('/addCharacter', [NavController::class, 'add']);
Route::post('/addCharacter', [CharacterController::class, 'add']);
Route::post('/delete', [CharacterController::class, 'delete']);
Route::get('/modify/{id}', [NavController::class, 'modify']);
Route::post('/modify', [CharacterController::class, 'modifyOne']);

Route::get('/drawers', [NavController::class, 'drawers']);
Route::get('/aboutDrawer/{id}', [NavController::class, 'aboutDrawer']);
Route::get('/addDrawer', [NavController::class, 'addDrawer']);
Route::post('/addDrawer', [DrawerController::class, 'addDrawer']);
Route::post('/deleteDrawer', [DrawerController::class, 'deleteDrawer']);
Route::get('/modifyDrawer/{id}', [NavController::class, 'modifyDrawer']);
Route::post('/modifyDrawer', [DrawerController::class, 'modifyOne']);