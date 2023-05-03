<?php

use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//********************ADMİNPANEL ROUTES**********************
Route::get('/admin',[AdminHomeController::class,'admin'])->name('admin');
//*********************ADMİNCATEGORY ROUTES***********************
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');


//*********************HOME ROUTES*********************
Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/iteminfo',[HomeController::class,'itemsinfo'])->name('itemsinfo');




















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
