<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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
        if ($this->method() == 'PUT' && str_contains($this->path(), 'budget') && str_contains($this->path(), 'pay')){
            return [
                'pay' => 'required',
            ];
        }
        return [
            'client' => 'required | min:3 | max: 255',
            'date' => 'required',
            'additional' => 'required | min:0',
            'quantity' => 'required | numeric | min:0'
        ];
    }
}
