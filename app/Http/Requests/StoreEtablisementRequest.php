<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtablisementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }
    // * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>

    public function authorize()
    {
        return true; // You can adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            // 'etab_nom' => 'required|string|max:255',
            // Add more validation rules for other fields if needed
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    // public function rules(): array
    // {
    //     return [
    //         //
    //     ];
    // }
}
