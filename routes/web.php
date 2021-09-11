<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\voucherController;
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

// Route::get('/', function () {
//     return view('content.home');
// });
//frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

//backend
Route::get('/login', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/dashboard', [AdminController::class, 'dashboard']);


//category product
Route::get('/add_category', [categoryController::class, 'add_category']);
Route::post('/save_category', [categoryController::class, 'save_category']);
Route::get('/all_category', [categoryController::class, 'all_category']);

Route::get('/edit_category/{id_product}', [categoryController::class, 'edit_category']);
Route::post('/update_category/{id_product}', [categoryController::class, 'update_category']);

Route::get('/delete_category/{id_product}', [categoryController::class, 'delete_category']);


//voucher product
Route::get('/add_voucher', [voucherController::class, 'add_voucher']);
Route::post('/save_voucher', [voucherController::class, 'save_voucher']);
Route::get('/all_voucher', [voucherController::class, 'all_voucher']);

Route::get('/edit_voucher/{id_voucher}', [voucherController::class, 'edit_voucher']);
Route::post('/update_voucher/{id_voucher}', [voucherController::class, 'update_voucher']);

Route::get('/delete_voucher/{id_voucher}', [voucherController::class, 'delete_voucher']);