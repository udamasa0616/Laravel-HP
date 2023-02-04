<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    // テーブルからデータを取得
    public function getAll()
    {

        $products = DB::table('Products') //DB名
            // ->(クエリビルダ) 途中で内容の順番書き換え必要
            ->select(
                'products.id as products_id',
                'company_id',
                'product_name',
                'price',
                'stock',
                'comment',
                'img_path',
                'company_name'
            )
            ->leftJoin(
                'companies',
                'companies.id',
                '=',
                'products.company_id'
            )
            ->get();

        return $products;
    }

    // データ入力
    public function registgetAll($data)
    {
        DB::table('Products')->insert([
            'product_name' => $data->product_name,
            'company_id'   => $data->makerName,
            'price'   => $data->price,
            'stock'   => $data->stock,
            'comment' => $data->comment,
            'img_path'    => $data->file,
        ]);
    }
}
