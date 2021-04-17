<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{

    public function toArray($request)
    {

        return [
            'data'=>$this->collection->map(function ($item){
                return [
                    'title'=>$item->title,
                    'image' => $item->image
                ];
            })
        ];
    }
}
