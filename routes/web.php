<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productsController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\anyController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [AuthController::class, 'redirect'])->middleware('auth', 'verified');


//route for products
Route::get('/addProduct', function(){
    return view('products.addProduct');
});
Route::post('/addProduct', [productsController::class, 'addProduct']);
Route::get('/addProduct', [productsController::class, 'viewProduct']);
Route::get('/productList', [productsController::class,'productList']);
Route::get('/updateProduct/{id}', [productsController::class,'updateProduct']);
Route::post('/updateProductConfirm/{id}', [productsController::class,'updateProductConfirm']);
Route::get('/removeProduct/{id}', [productsController::class, 'removeProduct']);
//end of routes for products

Route::get('/addCategory', function(){
    return view('products.addCategory');
});
Route::post('/addProductCategory', [categoryController::class, 'addProductCategory']);
Route::get('/categoryList', [categoryController::class, 'productCategoryList']);


Route::get('/addBrand', function(){
    return view('products.addBrand');
});
Route::post('/addBrand',[brandController::class, 'addProductBrand']);
Route::get('/brandList', [brandController::class, 'productBrandList']);

//Route for user
Route::get('/addUser', function(){
    return view('people.addUser');
});
Route::get('/userList',[userController::class,'userList']);
Route::post('/addUser', [userController::class,'addUser']);
Route::get('/updateUser/{id}', [userController::class,'updateUser']);
Route::post('/updateUserConfirmed/{id}', [userController::class,'updateUserConfirmed']);
Route::get('/delete/{id}', [userController::class,'delete']);
//Route::resource('test',anyController::class);