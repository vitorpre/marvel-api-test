<?php

namespace App\Http\Requests\Characters;

use Illuminate\Foundation\Http\FormRequest;

class ListCharacterRequest extends FormRequest
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
            'limit' => 'nullable|int',
            'offset' => 'nullable|int',
            'page' => 'nullable|int',
            'nameStartsWith' => 'nullable'
        ];
    }
}
