<?php

namespace App\Http\Requests\ProductRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
        ];
    }
}
