<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lost extends Model
{
    protected $fillable=[
        'product_name',
        'product_category',
        'owner_name',
        'owner_no',
    ];
}
