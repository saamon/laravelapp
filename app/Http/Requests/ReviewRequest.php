<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'rate' => ['required', 'integer', 'between:1,5'],
            'body' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'rate.required' => '評価は必須です。',
            'rate.integer' => '評価は数値で入力してください。',
            'rate.between' => '評価は1から5の間で選択してください。',
            'body.string' => 'レビュー本文は文字列で入力してください。',
        ];
    }
}
