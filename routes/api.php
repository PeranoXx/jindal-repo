<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\ShadeCardController;

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


Route::get('test', function(){
    dd(1111);
});

Route::get('/home-page', [HomePageController::class, 'index']);

// Get all categories
Route::get('/categories', [CategoryController::class, 'index']);

// Get all products by categories
Route::get('/products-by-categories', [ProductController::class, 'index']);

Route::post('/contact', [ContactUsController::class, 'store']);

// Get all shade cards
Route::get('/shade-cards', [ShadeCardController::class, 'index']);