<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['product_name', 'product_count','product_city', 'product_manufacturer', 'company_id'];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
