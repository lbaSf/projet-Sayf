<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    'verified'
])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);


route::get('/delete_category/{id}',[AdminController::class,'delete_category']);


route::get('/view_product',[AdminController::class,'view_product']);

route::post('/add_product',[AdminController::class,'add_product']);


route::get('/show_product',[AdminController::class,'show_product']);


route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

route::get('/update_product/{id}',[AdminController::class,'update_product']);

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);