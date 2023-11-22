<?php

namespace App\Http\Controllers;


use App\Models\product;
use App\Models\productCategory;
use App\Models\productBrand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\RedirectResponse;

use Illuminate\Http\Request;

class productsController extends Controller
{

    public function viewProduct(){
        $category = productCategory::all();
        $brand = productBrand::all();
        return view('products.addProduct', compact('category', 'brand'));
    }


    public function addProduct(Request $request){
        if(Auth::user()){
        $addProduct = new product;
       
       
        $addProduct->user_id = Auth::id();
        $addProduct->user_name = AUth::user()->name;
        $addProduct->product_Name = $request->productName;
        $addProduct->product_Category = $request->productCategory;
        $addProduct->product_Brand = $request->productBrand;
        $addProduct->product_Location = $request->productLocation;
        $addProduct->product_Price = $request->productPrice;
        $addProduct->product_Quantity = $request->productQuantity;
        $addProduct->total_Amount = $request->total_Amount;
        $addProduct->product_Status = $request->productStatus;

        $addProduct->save();
        
    }

        return redirect()->back()->with('message', 'Product Added Successfully');

        
    }

    public function productList(){
        $products = product::all();
        return view('products.productList', compact('products'));
    }

    public function updateProduct($id){
        $product = product::find($id);

        $category = productCategory::all();

        $brand = productBrand::all();

        return view('products.update_Product', compact('product','category', 'brand'));
    }

    public function updateProductConfirm(Request $request, $id){
        $product = product::find($id);
        $product->product_Name = $request->productName;
        $product->product_Category = $request->productCategory;
        $product->product_Brand = $request->productBrand;
        $product->product_Location = $request->productLocation;
        $product->product_Price = $request->productPrice;
        $product->product_Quantity = $request->productQuantity;
        $product->previous_Quantity = $request->previousQuantity;
        $product->total_Amount = $request->total_Amount;
        $product->Updated_Stock = $request->Updated_Stock;

        $product->product_Status = $request->productStatus;

        $product->save();

        return redirect()->back()->with('message', 'Product Updated Successfully');
        
    }

    public function removeProduct($id)
    {
        $product = product::find($id);
        $product->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    // function for detail product
    public function detailProduct($id)
    {
        $detail = product::find($id);

        return view('products.detailProduct', compact('detail'));
        
    }

   
   
}
