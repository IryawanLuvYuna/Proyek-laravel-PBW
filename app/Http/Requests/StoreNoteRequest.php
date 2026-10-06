<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreNoteRequest extends FormRequest
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
            'judul'         => 'required|string|min:8|max:255',
            'tanggal_rilis' => 'required|date',
            'sampul'         => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'judul.required'         => 'Judul publikasi wajib diisi.',
            'judul.min'              => 'Judul minimal terdiri dari 8 karakter.',
            'tanggal_rilis.required' => 'Tanggal rilis publikasi wajib diisi.',
            'sampul.required' => 'Sampul publikasi wajib diisi.'
        ];
    }
}
