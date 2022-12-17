<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function productMainView()
    {
        // query 
        $products = new Product();
        $result = $products->getAll();
        return view('main_display', ['result' => $result]);
    }
    // sample
    // public function productView()
    // {
    //     return view('product');
    // }
    // サンプル
    // return view('product', ['result' => $result]);

    public function productInfoView()
    {
        $products = new Product();
        $result = $products->getAll();
        return view('Product_information_details', ['result' => $result]);
    }

    public function productRegisterView()
    {
        $products = new Product();
        $result = $products->getAll();
        return view('Product_Register_display', ['result' => $result]);
    }

    public function productSalesView()
    {
        $products = new Product();
        $result = $products->getAll();
        return view('Product_information_edited_image', ['result' => $result]);
    }
}
