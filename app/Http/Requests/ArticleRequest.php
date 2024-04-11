<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'status' => ['required'],
            'user_id' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            'title' => ['required'],
            'content' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
