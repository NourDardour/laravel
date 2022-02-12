<?php

use App\Http\Controllers\ProductController;
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

Route::get('products', [ProductController::class, 'index']); //to fetch(return) all products

Route::post('product/add' ,[ProductController::class, 'store']); //to add a new product

Route::get('product/{id}/show', [ProductController::class, 'show']); //search one product by passing its id

//Route::put('product/{id}/update', [ProductController::class, 'update']); //update a product by passing its id

Route::post('product/{id}/update', [ProductController::class, 'update']); //update a product by passing its id


Route::delete('product/{id}/delete', [ProductController::class, 'destroy']); //delete a product by passing its id


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
