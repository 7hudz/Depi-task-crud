<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    protected $fillable = ['company_name', 'company_country', 'company_city', 'company_size'];
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
