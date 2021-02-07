<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Product;
use App\Provider;
use App\Purchase;
use App\PurchaseDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::get();
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        $providers = Provider::get();
        $products = Product::where('status', 'ACTIVE')->get();
        return view('purchases.create', compact('providers', 'products') );
    }

// provider_id
// type
// number_fact
// tax

//     purchase_id
// product_id
// sell_price
// buy_price
// quantity

    public function store(Request $request)
    {
        $purchase = Purchase::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'purchase_date'=>Carbon::now('America/Guayaquil'),
        ]);
        foreach ($request->product_id as $key => $product) {
            $results[] = array(
                "product_id"=>$request->product_id[$key], 
                "quantity"=>$request->quantity[$key], 
                "sell_price"=>$request->sell_price[$key],
                "buy_price"=>$request->buy_price[$key]);
        }

        $purchase->purchaseDetail()->createMany($results);
        return redirect()->route('purchases.index');
    }
    public function show(Purchase $purchase)
    {
        return view('purchases.show', compact('purchase'));
    }

   
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        // $purchase->update($request->all());
        // return redirect()->route('purchases.index');
    }

    public function destroy(Purchase $purchase)
    {
        // $purchase->delete();
    }
}
