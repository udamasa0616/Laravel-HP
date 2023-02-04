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
        $result   = $products->getAll();
        return view('Product_information_details', ['result' => $result]);
    }

    public function productRegisterView()
    {
        $products = new Product();
        $result   = $products->getAll();
        return view('Product_Register_display', ['result' => $result]);
    }

    public function productSalesView()
    {
        $products = new Product();
        $result   = $products->getAll();
        return view('Product_information_edited_image', ['result' => $result]);
    }

    // 入力フォーム
    public function productRegistView(Request $request)
    {
        // 登録処理
        DB::table('products')->insert([
            'company_id'   => $request->makerName,
            'product_name' => $request->product_name,
            'price'        => $request->price,
            'stock'        => $request->stock,
            'comment'      => $request->comment,
            'img_path'     => $request->file
            dd($request->makerName);
        ]);
        

        // 処理が完了したらregistにリダイレクト
        return redirect(route('/main'));
    }
}
