<?php

namespace App\Modules\Article\Http\Requests;

use App\Ship\Abstraction\AbstractRequest;

class UpdateArticleRequest extends AbstractRequest
{
    protected $urlParameters = [
        'id'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:articles,id',
            'header' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
