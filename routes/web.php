<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');;
// company--route
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::post('/companiesform', [CompanyController::class, 'store'])->name('companies-form');
Route::get('/companiesdetails', [CompanyController::class, 'showdata'])->name('companiesdetails');
// products--route
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/productsform', [ProductController::class, 'store'])->name('products-form');
Route::get('/productsshow', [ProductController::class, 'showdata'])->name('productsshow');
// update and delete routes
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');