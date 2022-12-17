<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
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
