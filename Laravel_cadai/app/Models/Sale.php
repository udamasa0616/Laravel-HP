<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    // テーブルからデータを取得
    public function getAll()
    {
        $sales = DB::table($this->table)
            ->select(
                'user_name',
                'email',
                'password',
            )

            ->get();
        return $sales;
    }
}
