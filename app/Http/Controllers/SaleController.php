<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $clients = Client::get();
        return view('sales.create', compact('clients'));
    }

    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all());
        foreach ($request->product_id as $key => $product) {
            $results[] = array("product_id" => $request->product_id[$key],
                               "quantity" => $request->quantity[$key],
                               "price" => $request->price[$key],
                               "discount" => $request->discount[$key]
                        );
        }
        $sale->saleDetails()->createMany($results);
        return redirect()->route('sales.index');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        return view('sales.edit', compact('sale'));
    }

    public function update(UpdateRequest $request, Sale $sale)
    {
        // $sale->update($request->all());
        // return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        // $sale->delete();
    }
}
