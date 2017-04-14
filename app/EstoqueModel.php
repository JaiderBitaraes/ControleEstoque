<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstoqueModel extends Model
{
    protected $table = 'stock';
    protected $filable = [

        'products_id','situation_id','qtd_min','qtd_max','input','output',
    ];
}
