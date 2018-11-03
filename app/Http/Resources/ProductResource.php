<?php

namespace App\Http\Resources;

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
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'sub_category_id' => $this->sub_category_id,
            'brand_id' => $this->brand_id,
            'image' => $this->image,
            'reference' => $this->reference,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
            'quantity' => 1,
            'more_info' => $this->more_info,
            'inside_box' => $this->inside_box,
            'active' => $this->active == 1 ? true : false,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at->format('Y-m-d'),
            'updated_at' => $this->updated_at->format('Y-m-d'),
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0'
        ];
    }
}
