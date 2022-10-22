<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\AlphaRule;//半角英数字のバリデーション

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
			'farmer' => 'required',
			'img' => 'required',
            'volume' => ['required','min:2','max:24',new AlphaRule],
            'price' => ['required','min:2','max:24',new AlphaRule],
            'comments' => 'required'
        ];
    }
}
