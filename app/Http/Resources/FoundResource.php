<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class FoundResource extends Resource
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
            'founder_name'=>$this->founder_name,
            'founder_no'=>$this->founder_no
        ];
    }
}
