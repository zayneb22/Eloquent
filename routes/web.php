<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
// make a root
Route::get('/', [ProductController::class, 'retrive']);
/*Route::get('/', function () {

});*/
// retrieve
Route::get('/show', [ProductController::class, 'retrive']);

// insert
Route::get('/create', [ProductController::class, 'create']);
Route::get('/sort', function () {
});
Route::post('/sort', [ProductController::class, 'sort']);
// delete
Route::get('/delete/{id}', function () {
});
Route::delete('/delete/{id}', [ProductController::class, 'delete']);
//
Route::get('/edit/{id}',  [ProductController::class, 'edit']);
