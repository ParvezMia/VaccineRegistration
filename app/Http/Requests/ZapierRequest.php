<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZapierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '37512542' => 'required', // name
            '298277c3' => 'required', // phone
            '06561fc6' => 'required', // email
            '69ee3849' => 'required', // nid
            '2695ab78' => 'required', // center_id
        ];
    }
}
