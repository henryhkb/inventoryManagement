<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productBrand;
use Illuminate\Support\Facades\Auth;

class brandController extends Controller
{
    //
    public function addProductBrand(Request $request){
        if(Auth::user()){
        $addproductBrand = new productBrand;
        $addproductBrand->user_id = Auth::id();
        $addproductBrand->user_name = Auth::user()->name;
        $addproductBrand->brandName = $request->productBrandName;
        $addproductBrand->brandDescription = $request->productBrandDescription;

        $addproductBrand->save();
        }
        
        return redirect()->back();
    }

    public function productBrandList(){
        $productBrandlist = productBrand::all();
        return view('products.brandList', compact('productBrandlist'));
    }
}
