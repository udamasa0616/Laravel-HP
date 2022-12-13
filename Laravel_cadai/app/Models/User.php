<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user extends Model
{
    $users = \DB::table($this->table)
            ->select(
                'user_name',
            )
            ->leftjoin(
                'companies',
                'companies.id',
                '=',
                'products.company_id'
            )
            ->get();
        return $sales;
}
