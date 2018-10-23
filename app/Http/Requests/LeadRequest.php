<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
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
        $rules = [
            'agent_name' => 'required',
            'move_in_date' => 'required|date_format:Y-m-d',
            'building_name' => 'required',
            'property_address' => 'required',
            'apartment' => 'required',
            'city' => 'required',
            'state_id' => 'required|exists:states,id',
            'zip' => 'required',
            'prior_address' => 'required',
            'best_person_to_call_name' => 'required',
            'best_person_to_call_phone' => 'required',
            'email_for_policy_info' => 'required',
            'payment_option' => '',
            'notes_to_allstate' => '',
            'lessee_1_first_name' => 'required',
            'lessee_1_last_name' => 'required',
            'lessee_1_dob' => 'required|date_format:Y-m-d',
            'lessee_1_phone' => 'required',
            'lessee_1_occupation' => 'required',
            'lessee_1_marital_status' => 'required|in:' . array_to_string(marital_status()),
            'lessee_dog_breed' => 'required_with:lessee_have_dog',
            'lessee_2_dob' => 'nullable|date_format:Y-m-d',
        ];

        if ($this->isMethod('POST')) {
            return $rules;
        } else {
            $rules['agent_id'] = 'nullable|exists:agents,id';
            $rules['status'] = 'nullable|in:' . array_to_string(lead_status());
            $rules['producer_id'] = 'nullable|exists:producers,id';
            $rules['gift_card_status'] = 'nullable|in:' . array_to_string(gift_card_status());
            $rules['gift_card_sent_date'] = 'nullable|date_format:Y-m-d';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'property_address' => 'address',
            'apartment' => 'apt',
            'city' => 'required',
            'state_id' => 'state',
            'best_person_to_call_name' => 'best person name',
            'best_person_to_call_phone' => 'best person phone',
            'lessee_1_first_name' => 'first name',
            'lessee_1_last_name' => 'last name',
            'lessee_1_dob' => 'date of birth',
            'lessee_1_phone' => 'phone',
            'lessee_1_occupation' => 'occupation',
            'lessee_2_dob' => 'date of birth',
        ];
    }
}
