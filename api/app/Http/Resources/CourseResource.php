<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'category' => $this->category,
            'active' => (bool) $this->active,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'vacancies' => $this->vacancies,
            'price' => $this->price,
        ];
    }
}
