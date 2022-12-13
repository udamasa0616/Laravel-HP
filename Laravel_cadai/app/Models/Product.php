<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    $products;
    // テーブルからデータを取得
    public function getAll()
    {

        $products = DB::table($this->products)
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
            ->leftjoin(
                'companies',
                'companies.id',
                '=',
                'products.company_id'
            )
            ->get();
        return $products;
    }
}
