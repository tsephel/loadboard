<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoadCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'type_id' => 'required',
            'contact' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'length' => 'required',
            'weight' => 'required',
            'full' => 'required',
            'startDate' => 'required',
            
        ];
    }
}
