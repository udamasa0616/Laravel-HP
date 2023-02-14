<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    // Post
    protected $fillable = ['product_name', 'company_id', 'price', 'stock', 'comment',  'img_path'];

    // テーブルからデータを取得
    public function getAll()
    {
        $products = DB::table('Products') //DB名
            // ->(クエリビルダ) 
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

    // Post

    public function registerArticle($request)
    {

        DB::table('Products')->insert([
            'product_name' => $request->product_name,
            'company_id'   => $request->makerName,
            'price'        => $request->price,
            'stock'        => $request->stock,
            'comment'      => $request->comment,
            'img_path'     => $request->img_path
        ]);
    }
}
