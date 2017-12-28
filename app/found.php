<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class found extends Model
{
    protected $fillable=[
        'product_name',
        'product_category',
        'founder_name',
        'founder_no',
    ];
}
