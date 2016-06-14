<?php namespace App\Http\Controllers;

class ProductController extends Controller {


    public function create()
    {
        return view('create_product');
    }


    public function update()
    {
        return view('update_product');
    }

}
