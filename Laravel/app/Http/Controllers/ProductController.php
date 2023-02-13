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


    public function productPostView(ArticleRequest $request)
    {

        // ディレクトリ名
        $photo = 'file_photos';

        // アップロードされたファイル名を取得
        $file_name = $request->file('img_path')->getClientOriginalName();
        // 画像情報がセットされていれば、保存処理を実行
        if (isset($file_name)) {
            // file_photosディレクトリに画像を保存
            $path = $request->file('img_path')->store('public/' . $photo . $file_name);
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // ファイル情報をDBに保存
                $image = new Product();

                $image->img_path = 'storage/' . $photo . '/' . $file_name;
                $image->save();

                // トランザクション開始
                DB::beginTransaction();

                try {
                    // 登録処理呼び出し
                    $model = new Product();
                    $model->registerArticle($request);
                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollback();
                    return back();
                }
            }
        }
        return redirect('/register');
    }
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

//  処理が完了したらregisterにリダイレクト
//  return redirect(route('register'));
// $post_data      = $request->except('img_path');
// $image_file     = $request->file('img_path');

// $temp_path      = $image_file->store('public/temp');
// $read_temp_path = str_replace('public/', 'storage/', $temp_path); //追加
// $product_name   = $post_data(['product_name', 'company_id', 'price', 'stock', 'comment', 'img_path']);

// $data = array(
//     'product_name' => $product_name,
//     'company_id'   => $product_name,
//     'price'        => $product_name,
//     'stock'        => $product_name,
//     'comment'      => $product_name,
//     'img_path'     => $product_name,
// );
// $request->session()->put('data', $data);

// return view('/register', compact('data'));

// ディレクトリ名
// $photo = 'file_photos';

// // アップロードされたファイル名を取得
// $file_name = $request->file('img_path')->getClientOriginalName();

// // file_photosディレクトリに画像を保存
// $request->file('img_path')->store('public/' . $photo . $file_name);

// // ファイル情報をDBに保存
// $image = new Product();
// $image->product_name = $file_name;
// $image->img_path = 'storage/' . $photo . '/' . $file_name;
// $image->save();


// // トランザクション開始
// DB::beginTransaction();

// try {
//     // 登録処理呼び出し
//     $model = new Product();
//     $model->registerArticle($request);
//     DB::commit();
// } catch (\Exception $e) {
//     DB::rollback();
//     return back();
// }


// $image->company_id = $file_name;
// $image->price = $file_name;
// $image->stock = $file_name;
// $image->comment = $file_name;


// 画像フォームでリクエストした画像情報を取得
// $img = $request->file('img_path');
// // 画像情報がセットされていれば、保存処理を実行
// if (isset($img)) {
//     // storage > public > img配下に画像が保存される
//     $path = $img->store('img', 'public');
//     // store処理が実行できたらDBに保存処理を実行
//     // トランザクション開始
//     DB::beginTransaction();
//     if ($path) {
//         try {
//             // 登録処理呼び出し
//             $model = new Product();
//             $model->registerArticle($request);
//             DB::commit();
//         } catch (\Exception $e) {
//             DB::rollback();
//             return back();
//         }
//     }
// }


// // アップロードされたファイルの取得
// $image = $request->file('img_path');
// // ファイルの保存とパスの取得
// $path = isset($image) ? $image->store('items', 'public') : '';

// // データベースに登録
// Product::create([
//     'product_name' => $request->product_name,
//     'company_id' => $request->company_id,
//     'price' => $request->price,
//     'stock' => $request->stock,
//     'comment' => $request->comment,
//     'img_path' => $path,
// ]);
// return redirect(route('/main'));