<?php

namespace App\Http\Resources\Product;

use App\Model\product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock,
            'discount' => $this->discount,
            'TotalPrice' => round((1 - $this->discount/100)*($this->price),2),
            'rating' => $this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count()):0,
            'link' => [
                'reviews'=> route('reviews.index',$this->id)
            ]
        ];
    }
}
