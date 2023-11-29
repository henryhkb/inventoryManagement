<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\transfers;
use Illuminate\Support\Facades\Auth;

class productTransferController extends Controller
{
    //    
    public function addtransfer(Request $request){
            if(Auth::user()){
            $addTransfer = new transfers;
            $addTransfer->user = AUth::user()->name;
            $addTransfer->productName = $request->productName;
            $addTransfer->transferFrom = $request->transferFrom;
            $addTransfer->transferTo = $request->transferTo;
            $addTransfer->transferQuantity = $request->transferQuantity;
            $addTransfer->save();
        }

        return redirect()->back()->with('message', 'Product Transfered Successfully');
    }

    public function viewtransfers()
    {
        $products = product::all();
        return view("transfer.addTransfer", compact('products'));
    }

    public function transferList(){
        $transfers = transfers::all();
        return view("transfer.transferList", compact('transfers'));
    }
}
