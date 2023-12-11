<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;

class FeedbackRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
            'city' => 'required|string',
            'message' => 'required|string',
        ];
    }
}
