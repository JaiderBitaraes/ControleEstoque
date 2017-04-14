<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $fillable = [

    'name','category_id','unity_id','value_cost','value_sell','qtd','created','expiration',

    ];

    
}
