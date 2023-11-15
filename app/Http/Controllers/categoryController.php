<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productCategory;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    //
    public function addProductCategory(Request $request){
        if(Auth::user()){
        $addProductCategory = new productCategory;
        $addProductCategory->user_id = Auth::id();
        $addProductCategory->user_name = Auth::user()->name;
        $addProductCategory->categoryName = $request->productCategoryName;
        $addProductCategory->categoryDescription = $request->productCategoryDescription;

        $addProductCategory->save();

        }

        return redirect()->back()->with('message', 'Category Added Successfully');

    }

    public function productCategoryList(){
        $productCategoryList = productCategory::all();
        return view('products.categoryList', compact('productCategoryList'));
    }
}
