<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 送られてきた値が正しいか
            'isbn' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'publisher' => ['required', 'string'],
            'published' => ['required', 'date'],
            'sample' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'isbn.required' => 'ISBNは必須です',
            'title.required' => '書名は必須です',
            'price.required' => '価格は必須です',
            'price.integer' => '価格は整数で入力してください',
            'published.required' => '刊行日は必須です',
            'published.date' => '刊行日は日付で入力してください',
        ];
    }
}
