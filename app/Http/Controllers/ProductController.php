<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){

        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function Create(){
        return view('product.productCreateForm');
    }

    public function Store(){
        return redirect()->route('allProduct');

    }

    public function Product(){
        return view('product.singleProduct');
    }

    public function singleProductEdit(){
        return view('product.productEditForm');
    }

    public function productUpdate(){
        return redirect()->route('allProduct');
    }

    public function productDelete(){
        return redirect()->route('allProduct');
    }
}
