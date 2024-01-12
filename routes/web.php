<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\account;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\checkout;
use App\Http\Controllers\CityController;
use App\Http\Controllers\index;
use App\Http\Controllers\PreorderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\product;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\User;
use App\Http\Controllers\VendorPaymentsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/{id}', [BlogController::class, 'getBlog'])->name('blog.getBlog');