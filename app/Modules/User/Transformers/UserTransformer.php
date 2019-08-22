<?php

namespace App\Modules\User\Transformers;

use App\Ship\Abstraction\AbstractTransformer;

class UserTransformer extends AbstractTransformer
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
            'user_id' => $this->id,
            'email' => $this->email,
            'name' => $this->name,
            'content' => $this->response_content,
        ];
    }
}
