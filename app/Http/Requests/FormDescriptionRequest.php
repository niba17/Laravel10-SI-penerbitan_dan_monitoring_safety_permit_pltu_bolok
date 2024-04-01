<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class FormDescriptionRequest extends FormRequest
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

        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|max:255|unique:form_descriptions',

                    'jsa_safety_permit_uuid' => 'required|max:255',
                ];
            case 'PUT':
                $description_uuid = $this->route()->uuid;

                return [
                    'name' => 'required|max:255||unique:form_descriptions,name,' . $description_uuid . ',uuid',

                    'jsa_safety_permit_uuid' => 'required|max:255',
                ];
            default:
                break;
        }
    }

    public function messages()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'name.required' => 'Nama harus diisi!',
                    'name.max' => 'Maksimal karakter Nama adalah :max karakter!',
                    'name.unique' => 'Nama sudah ada!',

                    'jsa_safety_permit_uuid.required' => 'Safety Permit harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Safety Permit adalah :max karakter!'
                ];
            case 'PUT':
                return [
                    'name.required' => 'Nama harus diisi!',
                    'name.max' => 'Maksimal karakter Nama adalah :max karakter!',
                    'name.unique' => 'Nama sudah ada!',

                    'jsa_safety_permit_uuid.required' => 'Safety Permit harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Safety Permit adalah :max karakter!'
                ];
            default:
                break;
        }
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new ValidationException(
    //         $validator,
    //         dd($this->route()->uuid)
    //     );
    // }
}
