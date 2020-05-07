<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->name,                        
            'TotalPrice' => round((1 - $this->discount/100)*($this->price),2),
            'rating' => $this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count()):0,
            'link' => [
                'reviews'=> route('products.show',$this->id)
            ],
        ];
    }
}
