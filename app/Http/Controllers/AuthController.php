<?php

namespace App\Http\Controllers;

//use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\product;

class AuthController extends Controller
{
    //
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == "Admin"){
            $listProduct = product::all();
            $totalProducts = product::all()->count();
            $totalProductAmount = product::all()->sum('total_Amount');

            $totalUsers = User::all()->count();
            $productBrand = product::all('product_Brand')->count();
            $productCategory = product::all('product_Category')->count();
            
            $productQuantity = product::all()->sum('product_Quantity');

           return view('dashboard', compact('totalProducts', 'totalUsers', 'listProduct', 'productBrand',
           'productCategory', 'totalProductAmount', 'productQuantity'));

        }else{
            $userproducts = product::where('product_Location', '=', 'Shop One')->get();
            $shopOneProduct = product::all()->count();
            $shopOneproductBrand = product::all('product_Brand')->count();
            $shopONeproductCategory = product::all('product_Category')->count();

            return view("userDashboard", compact('userproducts', 'shopOneProduct', 'shopOneproductBrand', 'shopONeproductCategory'));
        }
    }
}
