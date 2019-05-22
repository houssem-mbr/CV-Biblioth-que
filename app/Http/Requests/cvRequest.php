<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cvRequest extends FormRequest
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
            'titre' => 'required|min:3',
            'presentation' => 'required|min:10|max:200',
            'nomprenom' => 'required|min:3',
            'domaine' => 'required|min:3',
            'ecole' => 'required|min:3',
            'phone' => 'required|min:8'
        ];
    }
}
