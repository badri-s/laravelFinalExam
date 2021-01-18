<?php

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

Route::get('/', [App\Http\Controllers\UserController::class, 'getAllProduct']);


Auth::routes([
	// "register" => false // uncomment when out of beta important !!!
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
	'middleware' => ['auth'],
], function() {

	Route::get("dashboard", [App\Http\Controllers\AdminController::class, 'getDashboard']);
	Route::get("dashboard/product/create", [App\Http\Controllers\AdminController::class, 'createNewProduct']);

	Route::post("dashboard/product/create", [App\Http\Controllers\AdminController::class, 'createNewProductRecord']);

	Route::get("dashboard/cat/create", [App\Http\Controllers\AdminController::class, 'createCategory']);
	Route::post("dashboard/cat/create", [App\Http\Controllers\AdminController::class, 'createCategoryRecord']);

});