<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

// post用
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;

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

// 入力フォーム
    public function productRegistView(ArticleRequest $request){
    // トランザクション開始
        DB::beginTransaction();

    try {
        // 登録処理呼び出し
        $model = new getAll();
        $model -> registgetAll($request);
        DB::commit();
    } catch (\Exception $e) {
        DB::rollback();
        return back();
    }
    // 処理が完了したらregistにリダイレクト
    return redirect(route('main'));
}




    
