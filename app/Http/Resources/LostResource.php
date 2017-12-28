<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class LostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'product_name'=>$this->product_name,
            'product_category'=>$this->product_category,
            'owner_name'=>$this->owner_name,
            'owner_no'=>$this->owner_no
        ];
    }
}
