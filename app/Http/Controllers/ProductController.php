<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {


    public function create()
    {
        return view('create_product');
    }

    public function store(Request $request)
    {
        $data = ['product_name'=>$request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price];

        $product_data = new Product($data);

        if($product_data->save()) {
            return redirect('/products');
        } else {
            return redirect('/create');
        }

    }

    public function update(Request $request)
    {
        $product  = Product::findorFail($request->id);

        if($product->update($request->all())) {
            return redirect('/products/'.$request->id);
        } else {
            return redirect('/products');
        }
    }

    public function updateView(Request $request)
    {
        $product  = Product::findorFail($request->id);

        return view('update_product',['product'=>$product]);

    }

    public function view($id)
    {
        $product  = Product::findorFail($id);
        return view('view_product',['product'=>$product]);
    }

    public function viewAll()
    {
        $products  = Product::all();
        return view('view_products',['products'=>$products]);
    }

    public function delete(Request $request)
    {
        $product  = Product::find($request->id);

            if($product->delete()){
                return redirect('/products');
            }
            else{
                return redirect('/products');
            }

    }

}
