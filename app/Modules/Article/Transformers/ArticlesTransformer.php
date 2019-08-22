<?php

namespace App\Modules\Article\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class ArticlesTransformer extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'header' => $this->header,
            'short_description' => $this->short_description
        ];
    }
}
