<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'is_notify'   => $this->is_notify == 1 ? true : false,
            'is_verified' => $this->email_verified_at ? true : false,
            'role' => $this->getRoleNames()->first(),
            // 'is_active' => $this->is_active,

        ];
    }
}
