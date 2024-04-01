<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class PTWDescriptionRequest extends FormRequest
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
                    'name' => [
                        'required',
                        'max:255',
                        'unique:ptw_descriptions',
                    ],
                    'ptw_isolation_method_uuid' => [
                        'required',
                        'max:225'
                    ],
                    'isolation_by' => [
                        'required',
                        'max:225'
                    ],
                    'isolation_signature_date' => [
                        'required',
                        'max:225'
                    ],
                    'area' => [
                        'nullable',
                        'max:225'
                    ],
                    'restoration_by' => [
                        'nullable',
                        'max:225'
                    ],
                    'restoration_signature_date' => [
                        'nullable',
                        'max:225'
                    ],
                    'pmt_by' => [
                        'nullable',
                        'max:225'
                    ],
                    'pmt_signature_date' => [
                        'nullable',
                        'max:225'
                    ]
                ];
            case 'PUT':
                $ptw_description_uuid = $this->route()->uuid;

                return [
                    'name' => [
                        'required',
                        'max:255',
                        'unique:ptw_descriptions,name,' . $ptw_description_uuid . ',uuid',
                    ],
                    'ptw_isolation_method_uuid' => [
                        'required',
                        'max:225'
                    ],
                    'isolation_by' => [
                        'required',
                        'max:225'
                    ],
                    'isolation_signature_date' => [
                        'required',
                        'max:225'
                    ],
                    'area' => [
                        'nullable',
                        'max:225'
                    ],
                    'restoration_by' => [
                        'nullable',
                        'max:225'
                    ],
                    'restoration_signature_date' => [
                        'nullable',
                        'max:225'
                    ],
                    'pmt_by' => [
                        'nullable',
                        'max:225'
                    ],
                    'pmt_signature_date' => [
                        'nullable',
                        'max:225'
                    ]
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

                    'ptw_isolation_method_uuid.required' => 'Metode Isolasi harus diisi!',
                    'ptw_isolation_method_uuid.max' => 'Maksimal karakter Metode Isolasi adalah :max karakter!',

                    'isolation_by.required' => 'Isolasi Oleh harus diisi!',
                    'isolation_by.max' => 'Maksimal karakter Isolasi Oleh adalah :max karakter!',

                    'isolation_signature_date.required' => 'Tanggal Signature harus diisi!',
                    'isolation_signature_date.max' => 'Maksimal karakter Tanggal Signature adalah :max karakter!',

                    'area.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'restoration_by.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'restoration_signature_date.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'pmt_by.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'pmt_signature_date.max' => 'Maksimal karakter Area adalah :max karakter!',
                ];
            case 'PUT':
                return [
                    'name.required' => 'Nama harus diisi!',
                    'name.unique' => 'Nama sudah ada!',
                    'name.max' => 'Maksimal karakter Nama adalah :max karakter!',

                    'ptw_isolation_method_uuid.required' => 'Metode Isolasi harus diisi!',
                    'ptw_isolation_method_uuid.max' => 'Maksimal karakter Metode Isolasi adalah :max karakter!',

                    'isolation_by.required' => 'Isolasi Oleh harus diisi!',
                    'isolation_by.max' => 'Maksimal karakter Isolasi Oleh adalah :max karakter!',

                    'isolation_signature_date.required' => 'Tanggal Signature harus diisi!',
                    'isolation_signature_date.max' => 'Maksimal karakter Isolasi Signature Date adalah :max karakter!',

                    'area.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'restoration_by.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'restoration_signature_date.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'pmt_by.max' => 'Maksimal karakter Area adalah :max karakter!',

                    'pmt_signature_date.max' => 'Maksimal karakter Area adalah :max karakter!',
                ];
            default:
                break;
        }
    }
}
