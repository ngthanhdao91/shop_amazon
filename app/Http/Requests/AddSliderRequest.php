<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSliderRequest extends FormRequest
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
            'name' => 'required|unique:vp_products,prod_name',
            'img' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Required! Input please.',
            'name.unique'   => ':attribute Already exist! Enter Another Plesase.',
            'img.required' => 'img Required! Input please.',
        ];
    }
    public function attributes()
    {
        return[
            'name' => 'Product ',
        ];
    }
}
