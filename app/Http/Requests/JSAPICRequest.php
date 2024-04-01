<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class JSAPICRequest extends FormRequest
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
                        'unique:jsa_pics',
                    ],
                ];
            case 'PUT':
                $pic_uuid = $this->route()->uuid;

                return [
                    'name' => [
                        'required',
                        'max:255',
                        'unique:jsa_pics,name,' . $pic_uuid . ',uuid',
                    ],
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
                ];
            case 'PUT':
                return [
                    'name.required' => 'Nama harus diisi!',
                    'name.unique' => 'Nama sudah ada!',
                    'name.max' => 'Maksimal karakter Nama adalah :max karakter!',
                ];
            default:
                break;
        }
    }
}
