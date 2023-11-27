<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;

class storeController extends Controller
{
    //
    public function addStore(Request $request){
        $addShop = new shop;
        $addShop->Shopname = $request->shopName;
        $addShop->Description = $request->shopDescription;
        $addShop->save();

        return redirect()->back();
    }

    public function storeList(){
        $shops = shop::all();
        return view('people.storeList', compact('shops'));
    }

    public function updateShop($id){
        $shop = shop::find($id);
        return view('people.updateStore', compact('shop'));
    }

    public function confirmUpdate(Request $request, $id){
        $shop = shop::find($id);
        $shop->shopname = $request->shopName;
        $shop->Description = $request->shopDescription;
        $shop->save();
        return redirect()->back()->with('message', 'Shop Updated Successfully');

    }

    public function delete($id){
        $shop = shop::find($id);
        $shop->delete();
        return redirect()->back()->with('message', 'Shop Deleted Successfully');
    }

   
   
}
