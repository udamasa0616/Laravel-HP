<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    public function getAll()
    {
        $companies = DB::table($this->companies)
            ->select(
                'companies.id as companies_id',
                'street_address',
                'representative_name',
            )

            ->rightjoin(
                'companies',
                'companies.id',
                '=',
                'products.company_id'
            )
            ->get();
        return $companies;
    }
}
