<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class RoleAndUserRequest extends FormRequest
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
                    'role_id' => 'required|max:255',

                    'user_id' => 'nullable|max:255',
                ];
            case 'PUT':
                // $worker_uuid = $this->route()->uuid;

                return [
                    'role_id' => 'required|max:255|',

                    'user_id' => 'nullable|max:255',
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
                    'role_id.required' => 'Role harus diisi!',
                    'role_id.max' => 'Maksimal karakter Role adalah :max karakter!',

                    'user_id.max' => 'Maksimal karakter User adalah :max karakter!'
                ];
            case 'PUT':
                return [
                    'role_id.required' => 'Role harus diisi!',
                    'role_id.max' => 'Maksimal karakter Role adalah :max karakter!',

                    'user_id.max' => 'Maksimal karakter User adalah :max karakter!'
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
