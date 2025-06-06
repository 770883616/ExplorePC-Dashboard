<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'UserId' => $this->UserId,
            'UserName' => $this->UserName,
            'email' => $this->email,
            'Phone' => $this->Phone,
            'Address' => $this->Address,
            'Image' => $this->Image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
