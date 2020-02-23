<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProRequest extends FormRequest
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
            'name' => 'required|unique:vp_products,prod_name,'.$this->segment(4).',prod_id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Required! Input please.',
            'name.unique'   => ':attribute Already exist! Enter Another Plesase.',
        ];
    }
    public function attributes()
    {
        return[
            'name' => 'Product name',
        ];
    }
}
