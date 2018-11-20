<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'customer' => $this->customer,
            'total' => $this->total,
            'created_at' => $this->created_at->format('Y-m-d H:i:s A'),
            'orderDetails' => $this->orderDetails,
            'customer_name' => $this->customer->name,
            'customer_email' => $this->customer->email,
            
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0'
        ];
    }
}
