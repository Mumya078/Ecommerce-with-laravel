<?php

use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\ProductController;
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

//******************** ADMİN PANEL ROUTES**********************
Route::prefix('admin')->group(function (){
    Route::get('/',[AdminHomeController::class,'admin'])->name('admin');

//********************* ADMİN CATEGORY ROUTES***********************
    Route::prefix('category')->controller(CategoryController::class)->group(function () {
        Route::get('/','index')->name('admin_category');
        Route::get('/create','create')->name('admin_category_create');
        Route::post('/store','store')->name('admin_category_store');
        Route::get('/edit/{id}','edit')->name('admin_category_edit');
        Route::get('/delete/{id}','delete')->name('admin_category_delete');
        Route::get('/show/{id}','show')->name('admin_category_show');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    });

//*********************ADMİN PRODUCT ROUTES***********************
    Route::prefix('product')->controller(ProductController::class)->group(function (){
        Route::get('/','index')->name('admin_product');
        Route::get('/create','create')->name('admin_product_create');
        Route::post('/store','store')->name('admin_product_store');
        Route::get('/edit/{id}','edit')->name('admin_product_edit');
        Route::get('/delete/{id}','delete')->name('admin_product_delete');
        Route::get('/show/{id}','show')->name('admin_product_show');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('admin_product_update');
    });

    //*********************ADMİN IMAGE ROUTES***********************
    Route::prefix('image')->controller(ImageController::class)->group(function (){
        Route::get('/{pid}','index')->name('admin_image');
        Route::post('/store/{pid}','store')->name('admin_image_store');
        Route::get('/delete/{pid}/{id}','delete')->name('admin_image_delete');

    });
});


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
