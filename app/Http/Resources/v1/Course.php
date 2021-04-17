<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Course extends JsonResource
{
    public $preserveKeys = true;

    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}

