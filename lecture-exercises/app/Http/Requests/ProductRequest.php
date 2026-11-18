<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'brand' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'max:5000000'], // throwaway number, might use PHP_MAX_INT
            'description' => ['max:255', 'nullable', 'max_digits:255'],
        ];
    }
}
