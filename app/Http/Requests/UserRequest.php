<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                    'name' => 'required|max:255|unique:mysql2.users',

                    'password' => 'required|max:255|min:3',
                    'password_confirm' => 'required|same:password',
                ];
            case 'PUT':
                $user_id = $this->route()->id;

                return [
                    'name' => 'required|max:255|unique:mysql2.users,name,' . $user_id . ',id',

                    'password' => 'nullable|max:225|min:3',
                    'password_confirm' => 'nullable|same:password',
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

                    'password.required' => 'Password harus diisi!',
                    'password.max' => 'Maksimal karakter Password adalah :max karakter!',
                    'password.min' => 'Minimal karakter Password adalah :min karakter!',

                    'password_confirm.required' => 'Konfirmasi Password harus diisi!',
                    'password_confirm.same' => 'Konfirmasi Password tidak sesuai!',
                ];
            case 'PUT':
                return [
                    'name.required' => 'Nama harus diisi!',
                    'name.unique' => 'Nama sudah ada!',
                    'name.max' => 'Maksimal karakter Nama adalah :max karakter!',

                    'password.max' => 'Maksimal karakter Password adalah :max karakter!',
                    'password.min' => 'Minimal karakter Password adalah :min karakter!',

                    'password_confirm.same' => 'Konfirmasi Password tidak sesuai!',
                ];
            default:
                break;
        }
    }
}
