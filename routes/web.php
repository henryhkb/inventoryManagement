<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productsController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\productTransferController;
use App\Http\Controllers\storeController;

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
Route::get('/detailProduct/{id}', [productsController::class, 'detailProduct']);
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
//End route for users


//Route for store
Route::get('/addStore', function(){
    return view('people.addStore');
});
Route::post('/addShop', [storeController::class, 'addStore']);
Route::get('/storeList', [storeController::class, 'storeList']);
Route::get('/updateShop/{id}', [storeController::class,'updateShop']);
Route::post('/confirmUpdate/{id}', [storeController::class,'confirmUpdate']);
Route::get('/deleteShop/{id}', [storeController::class,'delete']);
//End route for store


//Route for Transfer
Route::get('/addtransfer',function(){
    return view('transfer.addTransfer');
});
Route::post('/addtransfer', [productTransferController::class, 'addTransfer']);
Route::get('/transferList',[productTransferController::class, 'transferList']);