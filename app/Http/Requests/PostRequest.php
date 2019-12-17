<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required|max:500',
            'translation'=> 'max:500',
            'source' => 'required|max:150'
        ];
    }

    public function messages()
    {
        return [
            'body.required' => 'Quoteを入力してください',
            'body.max' => 'Quoteは500文字以内で入力してください',
            'translation.max' => '日本語訳は500文字以内で入力してください',
            'source.required' => '出典を入力してください',
            'source.max' => '出典は150文字以内で入力してください',
        ];
    }
}
