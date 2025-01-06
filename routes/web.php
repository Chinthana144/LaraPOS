<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\ShopUserController;
use App\Models\ShopUsers;
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

Route::get('/template', function () {
    return view('layouts.template');
});

// Route::get('/dashboard', function () {
//     return view('shops.shopSelect');
// })->middleware(['auth', 'verified'])->name('shops.shopSelect');

Route::get('/dashboard', [ShopsController::class, 'shopSelect'])->middleware(['auth', 'verified'])->name('shops.shopSelect');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //companies
    Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
    Route::get('/add-company', [CompaniesController::class, 'create'])->name('companies.create');
    Route::post('/store-company', [CompaniesController::class, 'store'])->name('companies.store');
    Route::post('/edit-company', [CompaniesController::class, 'edit'])->name('companies.edit');
    Route::put('/update-company', [CompaniesController::class, 'update'])->name('companies.update');

    //shops
    Route::get('/shops', [ShopsController::class, 'index'])->name('shops.index');
    Route::get('/add-shop', [ShopsController::class, 'create'])->name('shops.create');
    Route::post('/store-shop', [ShopsController::class, 'store'])->name('shops.store');
    Route::post('/edit-shop', [ShopsController::class, 'edit'])->name('shops.edit');
    Route::put('/update-shop', [ShopsController::class, 'update'])->name('shops.update');

    //shop users
    Route::get('/shopUsers', [ShopUserController::class, 'index'])->name('shopUsers.index');
    Route::get('/showShopUsers', [ShopUserController::class, 'show'])->name('shopUsers.show');
    Route::post('/store-shopUsers', [ShopUserController::class, 'store'])->name('shopUsers.store');
    Route::put('/update-shopUsers', [ShopUserController::class, 'update'])->name('shopUsers.update');
    Route::get('/gotoshop/{shop_id}', [ShopUserController::class, 'select'])->name('shopUsers.select');

    Route::get('/home', function(){
        return view('home');
    });

    //features
    Route::get('/features', [FeatureController::class, 'index'])->name('feature.index');

    //categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/showOneCategory', [CategoryController::class, 'showOneCategory'])->name('category.showOne');
    Route::put('/update-category', [CategoryController::class, 'update'])->name('category.update');


});

require __DIR__.'/auth.php';
