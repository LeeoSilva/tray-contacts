<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditContactRequest extends FormRequest
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
            'name' => 'max:255',
            'email' => 'email|unique:contacts|max:255',
            'socials.facebook' => 'unique:socials|max:255',
            'socials.linkedin' => 'unique:socials|max:255',
            'telephones.phone_number' => 'unique:telephones|max:255',
            'telephones.phone_type_id' => 'max:255',
            'telephones.id' => 'numerical|max:255',
        ];
    }
}
