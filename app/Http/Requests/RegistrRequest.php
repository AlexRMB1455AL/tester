<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegistrRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'provider_id' => 'required|integer|max:11',
            'service_id' => 'required|integer|max:11',
            'total_time' => 'required|string|max:100',
            'earnings' => 'required|string|max:100',
            'status' => ['required', Rule::in(
                [
                    'created',
                    'payed',
                    'started',
                    'finished',
                    'confirmed',
                    'closed',
                    'canceled',
                ])]
        ];
    }
    public function messages()
    {
        return parent::messages();
    }
}
