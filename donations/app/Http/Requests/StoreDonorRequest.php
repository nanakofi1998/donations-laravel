<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDonorRequest extends FormRequest
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
            'donor_type' => ['required', Rule::in(['individual', 'institution'])],
    
            'f_name' => ['exclude_unless:donor_type,individual', 'required', 'string', 'max:255'],
            'l_name' => ['exclude_unless:donor_type,individual', 'required', 'string', 'max:255'],

            'institution_name' => ['exclude_unless:donor_type,institution', 'required', 'string', 'max:255'],
            'institution_address' => ['exclude_unless:donor_type,institution', 'required', 'string', 'max:255'],

            'email' => ['required', 'email', 'unique:donors,email'],
            'donor_amount' => ['required', 'numeric', 'min:0'],
            'donation_preference' => ['required', Rule::in(['one_time', 'recurring'])],
            'campaign_id' => ['nullable', 'integer', 'exists:campaigns,id'],
            'donor_phone' => ['nullable', 'string', 'max:15'],
            'donor_message' => ['nullable', 'string', 'max:65535'],
            'anonymous' => ['nullable', 'boolean'],
        ];
    }
    
    public function messages(): array
    {
        return [
            'f_name.required_if' => 'The first name is required for individual donors.',
            'l_name.required_if' => 'The last name is required for individual donors.',
            'institution_name.required_if' => 'The institution name is required for institutional donors.',
            'institution_address.required_if' => 'The institution address is required for institutional donors.',
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email format.',
            'email.unique' => 'This email address has already been taken.',
            'campaign_id.exists' => 'The selected campaign does not exist.',
        ];
    }
}
