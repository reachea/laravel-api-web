<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [
    HomeController::class, 'index'
]);

Route::get('/register', [
    RegisterController::class, 'index'
]);

Route::post('/register',[
    RegisterController::class, 'register'
]);

Route::get('/home', [
    HomeController::class, 'index'
]);

Route::get('/login', [
    LoginController::class, 'index'
]);

Route::post('/login', [
    LoginController::class, 'login'
]);

// Category
Route::get('/category', [
    CategoryController::class, 'index'
]);
Route::get('/category/add', [
    CategoryController::class, 'add'
]);
Route::post('/category/add', [
    CategoryController::class, 'add_action'
]);
Route::get('/category/edit/{id}', [
    CategoryController::class, 'edit'
]);
Route::post('/category/edit/{id}', [
    CategoryController::class, 'edit_action'
]);
Route::post('/category/delete/{id}', [
    CategoryController::class, 'delete_action'
]);