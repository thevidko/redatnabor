<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this -> id,
            'categoryId' => $this -> category_id,
            'categoryName' => $this -> category?->name,
            'title' => $this -> title,
            'done' => $this -> done,
            'createdAt' => $this -> created_at,
            'updatedAt' => $this -> updated_at,
        ];

    }
}
