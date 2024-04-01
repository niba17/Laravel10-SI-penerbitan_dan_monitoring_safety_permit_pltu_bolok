<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JSARequest extends FormRequest
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
                    'name' => 'required|max:255|unique:jsas',
                    'job_base' => 'required|max:255',
                    'location' => 'required|max:255',
                    'person_group_uuid' => 'required|max:255',
                    'jsa_safety_permit_uuid' => 'required|max:255|array',
                    'jsa_worker_uuid' => 'required|max:255',
                    'jsa_work_tool_uuid' => 'required|max:255',
                    'jsa_work_stage_uuid' => 'required|max:255',
                    'start_date' => 'required|max:255|date',
                    'finish_date' => 'required|max:255|date',
                    'start_time' => 'required|max:255|date_format:H:i',
                    'finish_time' => 'required|max:255|date_format:H:i',
                    'jsa_creator' => 'required|max:255',
                    'jsa_creator_position' => 'required|max:255',
                    'jsa_supervisor_k3' => 'required|max:255',
                    'jsa_supervisor_k3_unit' => 'required|max:255',
                    'status' => 'required|max:255',
                ];
            case 'PUT':
                $jsa_uuid = $this->route()->uuid;

                return [
                    'name' => 'required|max:255|unique:jsas,name,' . $jsa_uuid . ',uuid',
                    'job_base' => 'required|max:255',
                    'location' => 'required|max:255',
                    'person_group_uuid' => 'required|max:255',
                    'jsa_safety_permit_uuid' => 'required|array|max:500',
                    'jsa_worker_uuid' => 'required|array|max:500',
                    'jsa_work_tool_uuid' => 'required|array|max:500',
                    'jsa_work_stage_uuid' => 'required|array|max:500',
                    'start_date' => 'required|max:255|date',
                    'finish_date' => 'required|max:255|date',
                    'start_time' => 'required|max:255|date_format:H:i',
                    'finish_time' => 'required|max:255|date_format:H:i',
                    'jsa_creator' => 'required|max:255',
                    'jsa_creator_position' => 'required|max:255',
                    'jsa_supervisor_k3' => 'required|max:255',
                    'jsa_supervisor_k3_unit' => 'required|max:255',
                    'status' => 'required|max:255',
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
                    'name.required' => 'Nama Pekerjaan harus diisi!',
                    'name.max' => 'Maksimal karakter Nama Pekerjaan adalah :max karakter!',
                    'name.unique' => 'Nama Pekerjaan sudah ada!',

                    'job_base.required' => 'Dasar Pekerjaan (WO/SPK) harus diisi!',
                    'job_base.max' => 'Maksimal karakter Dasar Pekerjaan (WO/SPK) adalah :max karakter!',

                    'location.required' => 'Lokasi harus diisi!',
                    'location.max' => 'Maksimal karakter Lokasi adalah :max karakter!',

                    'person_group_uuid.required' => 'Pelaksana Pekerjaan harus dipilih!',
                    'person_group_uuid.max' => 'Maksimal karakter Pelaksana Pekerjaan adalah :max karakter!',

                    'jsa_safety_permit_uuid.required' => 'Safety Permit harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Safety Permit adalah :max karakter!',
                    'jsa_safety_permit_uuid.array' => 'Format Safety Permit harus berupa array!',

                    'jsa_worker_uuid.required' => 'Pekerja harus dipilih!',
                    'jsa_worker_uuid.max' => 'Maksimal karakter Pekerja adalah :max karakter!',
                    'jsa_worker_uuid.array' => 'Format Pekerja harus berupa array!',

                    'jsa_work_tool_uuid.required' => 'Tools Kerja harus dipilih!',
                    'jsa_work_tool_uuid.max' => 'Maksimal karakter Tools Kerja adalah :max karakter!',
                    'jsa_work_tool_uuid.array' => 'Format Tools Kerja harus berupa array!',

                    'jsa_work_stage_uuid.required' => 'Tahapan Kerja harus dipilih!',
                    'jsa_work_stage_uuid.max' => 'Maksimal karakter Tahapan Kerja adalah :max karakter!',
                    'jsa_work_stage_uuid.array' => 'Format Tahapan Kerja harus berupa array!',

                    'start_date.required' => 'Tanggal mulai hari kerja harus diisi!',
                    'start_date.max' => 'Maksimal karakter Tanggal mulai hari kerja adalah :max karakter!',
                    'start_date.date' => 'Format Tanggal mulai hari kerja harus berupa tanggal!',

                    'finish_date.required' => 'Tanggal selesai hari kerja harus diisi!',
                    'finish_date.max' => 'Maksimal karakter Tanggal selesai hari kerja adalah :max karakter!',
                    'finish_date.date' => 'Format Tanggal selesai hari kerja harus berupa tanggal!',

                    'start_time.required' => 'Waktu mulai hari kerja harus diisi!',
                    'start_time.max' => 'Maksimal karakter Waktu mulai hari kerja adalah :max karakter!',
                    'start_time.date_format' => 'Format Waktu mulai hari kerja harus berupa waktu!',

                    'finish_time.required' => 'Waktu selesai hari kerja harus diisi!',
                    'finish_time.max' => 'Maksimal karakter Waktu selesai hari kerja adalah :max karakter!',
                    'finish_time.date_format' => 'Format Waktu selesai hari kerja harus berupa waktu!',

                    'jsa_creator.required' => 'Pembuat JSA harus diisi!',
                    'jsa_creator.max' => 'Maksimal karakter Pembuat JSA adalah :max karakter!',

                    'jsa_creator_position.required' => 'Jabatan Pembuat JSA harus diisi!',
                    'jsa_creator_position.max' => 'Maksimal karakter Jabatan Pembuat JSA adalah :max karakter!',

                    'jsa_supervisor_k3.required' => 'Supervisor K3 harus diisi!',
                    'jsa_supervisor_k3.max' => 'Maksimal karakter Supervisor K3 adalah :max karakter!',

                    'jsa_supervisor_k3_unit.required' => 'Supervisor K3 Unit harus diisi!',
                    'jsa_supervisor_k3_unit.max' => 'Maksimal karakter Supervisor K3 Unit adalah :max karakter!',

                    'status.required' => 'Status harus diisi!',
                    'status.max' => 'Maksimal karakter Status adalah :max karakter!',
                ];
            case 'PUT':
                return [
                    'name.required' => 'Nama Pekerjaan harus diisi!',
                    'name.max' => 'Maksimal karakter Nama Pekerjaan adalah :max karakter!',
                    'name.unique' => 'Nama Pekerjaan sudah ada!',

                    'job_base.required' => 'Dasar Pekerjaan (WO/SPK) harus diisi!',
                    'job_base.max' => 'Maksimal karakter Dasar Pekerjaan (WO/SPK) adalah :max karakter!',

                    'location.required' => 'Lokasi harus diisi!',
                    'location.max' => 'Maksimal karakter Lokasi adalah :max karakter!',

                    'person_group_uuid.required' => 'Pelaksana Pekerjaan harus dipilih!',
                    'person_group_uuid.max' => 'Maksimal karakter Pelaksana Pekerjaan adalah :max karakter!',

                    'jsa_safety_permit_uuid.required' => 'Safety Permit harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Safety Permit adalah :max karakter!',

                    'jsa_worker_uuid.required' => 'Pekerja harus dipilih!',
                    'jsa_worker_uuid.max' => 'Maksimal karakter Pekerja adalah :max karakter!',

                    'jsa_work_tool_uuid.required' => 'Tools Kerja harus dipilih!',
                    'jsa_work_tool_uuid.max' => 'Maksimal karakter Tools Kerja adalah :max karakter!',

                    'jsa_work_stage_uuid.required' => 'Tahapan Kerja harus dipilih!',
                    'jsa_work_stage_uuid.max' => 'Maksimal karakter Tahapan Kerja adalah :max karakter!',

                    'start_date.required' => 'Tanggal mulai hari kerja harus diisi!',
                    'start_date.max' => 'Maksimal karakter Tanggal mulai hari kerja adalah :max karakter!',
                    'start_date.date' => 'Format Tanggal mulai hari kerja harus berupa tanggal!',

                    'finish_date.required' => 'Tanggal selesai hari kerja harus diisi!',
                    'finish_date.max' => 'Maksimal karakter Tanggal selesai hari kerja adalah :max karakter!',
                    'finish_date.date' => 'Format Tanggal selesai hari kerja harus berupa tanggal!',

                    'start_time.required' => 'Waktu mulai hari kerja harus diisi!',
                    'start_time.max' => 'Maksimal karakter Waktu mulai hari kerja adalah :max karakter!',
                    'start_time.date_format' => 'Format Waktu mulai hari kerja harus berupa waktu!',

                    'finish_time.required' => 'Waktu selesai hari kerja harus diisi!',
                    'finish_time.max' => 'Maksimal karakter Waktu selesai hari kerja adalah :max karakter!',
                    'finish_time.date_format' => 'Format Waktu selesai hari kerja harus berupa waktu!',

                    'jsa_creator.required' => 'Pembuat JSA harus diisi!',
                    'jsa_creator.max' => 'Maksimal karakter Pembuat JSA adalah :max karakter!',

                    'jsa_creator_position.required' => 'Jabatan Pembuat JSA harus diisi!',
                    'jsa_creator_position.max' => 'Maksimal karakter Jabatan Pembuat JSA adalah :max karakter!',

                    'jsa_supervisor_k3.required' => 'Supervisor K3 harus diisi!',
                    'jsa_supervisor_k3.max' => 'Maksimal karakter Supervisor K3 adalah :max karakter!',

                    'jsa_supervisor_k3_unit.required' => 'Supervisor K3 Unit harus diisi!',
                    'jsa_supervisor_k3_unit.max' => 'Maksimal karakter Supervisor K3 Unit adalah :max karakter!',

                    'status.required' => 'Status harus diisi!',
                    'status.max' => 'Maksimal karakter Status adalah :max karakter!',
                ];
            default:
                break;
        }
    }
}
