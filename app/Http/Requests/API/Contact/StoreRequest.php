<?php

namespace App\Http\Requests\API\Contact;

use App\Http\Requests\Request;

class StoreRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'department' => 'required|string',
            'content' => 'required|string',
            'company' => 'required|string',
            'subject' => 'required|string'
        ];
    }
}
