<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Product;
use App\Provider;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $providers = Provider::get();
        $categories = Category::get();
        
        return view('products.create', compact('providers', 'categories'));
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'sell_price' => 'required',
            'buy_price' => 'required',
            
            
        ]);
        $image_name = null;
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"), $image_name);
        }
        Product::create($request->all() + [
            'image' => $image_name,
        ]);
        session()->flash('message', 'Producto creado con éxito');
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $providers = Provider::get();
        $categories = Category::get();
        
        return view('products.edit', compact('product', 'providers', 'categories'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $validated = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'sell_price' => 'required',
            'buy_price' => 'required',
            
            
        ]);
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"), $image_name);
        }
        $product->update($request->all()+ [
            'image' => $image_name,
        ]);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
