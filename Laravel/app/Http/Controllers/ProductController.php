<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// post用
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    // 表示
    public function productMainView()
    {
        // query 
        $products = new Product();
        $result = $products->getAll();

        return view('main_display', ['result' => $result]);
    }

    public function productInfoView()
    {
        $products = new Product();
        $result   = $products->getAll();
        return view('Product_information_details', ['result' => $result]);
    }

    public function productSalesView()
    {
        $products = new Product();
        $result   = $products->getAll();
        return view('Product_information_edited_image', ['result' => $result]);
    }

    public function dummyView()
    {
        return view('Product_Register_display');
    }

    // 入力フォーム

    // 表示
    public function productRegisterView()
    {
        return view('Product_Register_display');
    }

    // POST

    public function confirm(\App\Http\Requests\ArticleRequest $request)
    {
        // モデルへ指示
        $product_name = $request->product_name;
        $company_id = $request->company_id;
        $price = $request->price;
        $stock = $request->stock;
        $comment = $request->comment;

        $img_path = uniqid(rand()) . "." . $request->file('img_path')->guessExtension(); // TMPファイル名
        $request->file('img_path')->move(public_path() . "/img/tmp", $img_path);
        $thum = "/img/tmp/" . $img_path;

        $hash = array(
            'product_name' => $product_name,
            'company_id' => $company_id,
            'price' => $price,
            'stock' => $stock,
            'comment' => $comment,
            'img_path' => $thum,

        );

        return view('main_display')->with($hash);
    }

    // public function productPostView(ArticleRequest $request)
    // {
    //     // 商品をデータベースに登録
    //     // Product::create([
    //     //     'product_name' => $request->product_name,
    //     //     'company_id' => $request->makerName,
    //     //     'price'   => $request->price,
    //     //     'stock'   => $request->stock,
    //     //     'comment' => $request->comment,
    //     //     'img_path'    => $request->img_path
    //     // ]);
    // }
}
