<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PTWRequest extends FormRequest
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
                    'ptw_number' => 'required|max:255',
                    'location' => 'required|max:255',
                    'kks_equipment_number' => 'nullable|max:255',
                    'job_name' => 'required|max:255',
                    'job_duration' => 'required|max:255',
                    'field_or_company' => 'required|max:255',
                    'working_party' => 'required|max:255',
                    'work_status' => 'required|max:255',
                    'certificate' => 'required|max:255',
                    'ptw_description_uuid' => 'nullable|max:255',
                    'ptw_note_uuid' => 'nullable|max:255',
                    'jsa_safety_permit_uuid' => 'required|max:255',
                    'knowing' => 'required|max:255',
                    'knowing_position' => 'required|max:255',
                    'approve_start_ptw_officer' => 'required|max:255',
                    'approve_start_maintenance_supervisor' => 'required|max:255',
                    'approve_start_date' => 'required|max:255|date',
                    'approve_start_time' => 'required|max:255|date_format:H:i',
                    'clearance_ptw_officer' => 'required|max:255',
                    'clearance_maintenance_supervisor' => 'required|max:255',
                    'third_party_person' => 'nullable|max:255',
                    'third_party_date' => 'nullable|max:255|date',
                    'third_party_time' => 'nullable|max:255|date_format:H:i',
                ];
            case 'PUT':
                // $jsa_uuid = $this->route()->uuid;

                return [
                    'ptw_number' => 'required|max:255',
                    'location' => 'required|max:255',
                    'kks_equipment_number' => 'nullable|max:255',
                    'job_name' => 'required|max:255',
                    'job_duration' => 'required|max:255',
                    'field_or_company' => 'required|max:255',
                    'working_party' => 'required|max:255',
                    'work_status' => 'required|max:255',
                    'certificate' => 'required|max:255',
                    'ptw_description_uuid' => 'nullable|max:255',
                    'ptw_note_uuid' => 'nullable|max:255',
                    'jsa_safety_permit_uuid' => 'required|max:255',
                    'knowing' => 'required|max:255',
                    'knowing_position' => 'required|max:255',
                    'approve_start_ptw_officer' => 'required|max:255',
                    'approve_start_maintenance_supervisor' => 'required|max:255',
                    'approve_start_date' => 'required|max:255|date',
                    'approve_start_time' => 'required|max:255|date_format:H:i',
                    'clearance_ptw_officer' => 'required|max:255',
                    'clearance_maintenance_supervisor' => 'required|max:255',
                    'third_party_person' => 'nullable|max:255',
                    'third_party_date' => 'nullable|max:255|date',
                    'third_party_time' => 'nullable|max:255|date_format:H:i',
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
                    'ptw_number.required' => 'Nomer PTW harus diisi!',
                    'ptw_number.max' => 'Maksimal karakter Nomer PTW adalah :max karakter!',

                    'location.required' => 'Lokasi / Work Area harus diisi!',
                    'location.max' => 'Maksimal karakter Lokasi / Work Area adalah :max karakter!',

                    'kks_equipment_number.max' => 'Maksimal karakter KKS Equipment Number adalah :max karakter!',

                    'job_name.required' => 'Nama Pekerjaan harus diisi!',
                    'job_name.max' => 'Maksimal karakter Nama Pekerjaan adalah :max karakter!',

                    'job_duration.required' => 'Durasi Pekerjaan harus diisi!',
                    'job_duration.max' => 'Maksimal karakter Durasi Pekerjaan adalah :max karakter!',

                    'field_or_company.required' => 'Bidang / Pekerjaan harus diisi!',
                    'field_or_company.max' => 'Maksimal karakter Bidang / Pekerjaan adalah :max karakter!',

                    'working_party.required' => 'Working Party harus dipilih!',
                    'working_party.max' => 'Maksimal karakter Working Party adalah :max karakter!',

                    'work_status.required' => 'Status Pekerjaan harus dipilih!',
                    'work_status.max' => 'Maksimal karakter Status Pekerjaan adalah :max karakter!',

                    'certificate.required' => 'Sertifikat harus dipilih!',
                    'certificate.max' => 'Maksimal karakter Sertifikat adalah :max karakter!',

                    'ptw_description_uuid.max' => 'Maksimal karakter Deskripsi adalah :max karakter!',

                    'ptw_note_uuid.max' => 'Maksimal karakter Catatan Tambahan adalah :max karakter!',

                    'jsa_safety_permit_uuid.required' => 'Precaution & Hazard harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Precaution & Hazard adalah :max karakter!',

                    'knowing.required' => 'Mengetahui harus diisi!',
                    'knowing.max' => 'Maksimal karakter Mengetahui adalah :max karakter!',

                    'knowing_position.required' => 'Jabatan Mengetahui harus diisi!',
                    'knowing_position.max' => 'Maksimal karakter Jabatan Mengetahui adalah :max karakter!',

                    'approve_start_ptw_officer.required' => 'Approve Start PTW Officer harus diisi!',
                    'approve_start_ptw_officer.max' => 'Maksimal karakter Approve Start PTW Officer adalah :max karakter!',

                    'approve_start_maintenance_supervisor.required' => 'Approve Start Supervisor Pemeliharaan harus diisi!',
                    'approve_start_maintenance_supervisor.max' => 'Maksimal karakter Approve Start Supervisor Pemeliharaan adalah :max karakter!',

                    'approve_start_date.required' => 'Tanggal Approve Start harus diisi!',
                    'approve_start_date.max' => 'Maksimal karakter Tanggal Approve Start adalah :max karakter!',
                    'approve_start_date.date' => 'Format Tanggal Approve Start harus berupa tanggal!',

                    'approve_start_time.required' => 'Waktu Approve Start harus diisi!',
                    'approve_start_time.max' => 'Maksimal karakter Waktu Approve Start adalah :max karakter!',
                    'approve_start_time.date_format' => 'Format Waktu Approve Start harus berupa waktu!',

                    'clearance_ptw_officer.required' => 'Clearance PTW Officer harus diisi!',
                    'clearance_ptw_officer.max' => 'Maksimal karakter Clearance PTW Officer adalah :max karakter!',

                    'clearance_maintenance_supervisor.required' => 'Clearance Supervisor Pemeliharaan harus diisi!',
                    'clearance_maintenance_supervisor.max' => 'Maksimal karakter Clearance Supervisor Pemeliharaan adalah :max karakter!',

                    'third_party_person.max' => 'Maksimal karakter Orang Pihak Ketiga adalah :max karakter!',

                    'third_party_date.max' => 'Maksimal karakter Tanggal Pihak Ketiga adalah :max karakter!',
                    'third_party_date.date' => 'Format Tanggal Pihak Ketiga harus berupa waktu!',

                    'third_party_time.max' => 'Maksimal karakter Waktu Pihak Ketiga adalah :max karakter!',
                    'third_party_time.date_format' => 'Format Waktu Pihak Ketiga harus berupa waktu!',
                ];
            case 'PUT':
                return [
                    'ptw_number.required' => 'Nomer PTW harus diisi!',
                    'ptw_number.max' => 'Maksimal karakter Nomer PTW adalah :max karakter!',

                    'location.required' => 'Lokasi / Work Area harus diisi!',
                    'location.max' => 'Maksimal karakter Lokasi / Work Area adalah :max karakter!',

                    'kks_equipment_number.max' => 'Maksimal karakter KKS Equipment Number adalah :max karakter!',

                    'job_name.required' => 'Nama Pekerjaan harus diisi!',
                    'job_name.max' => 'Maksimal karakter Nama Pekerjaan adalah :max karakter!',

                    'job_duration.required' => 'Durasi Pekerjaan harus diisi!',
                    'job_duration.max' => 'Maksimal karakter Durasi Pekerjaan adalah :max karakter!',

                    'field_or_company.required' => 'Bidang / Pekerjaan harus diisi!',
                    'field_or_company.max' => 'Maksimal karakter Bidang / Pekerjaan adalah :max karakter!',

                    'working_party.required' => 'Working Party harus dipilih!',
                    'working_party.max' => 'Maksimal karakter Working Party adalah :max karakter!',

                    'work_status.required' => 'Status Pekerjaan harus dipilih!',
                    'work_status.max' => 'Maksimal karakter Status Pekerjaan adalah :max karakter!',

                    'certificate.required' => 'Sertifikat harus dipilih!',
                    'certificate.max' => 'Maksimal karakter Sertifikat adalah :max karakter!',

                    'ptw_description_uuid.max' => 'Maksimal karakter Deskripsi adalah :max karakter!',

                    'ptw_note_uuid.max' => 'Maksimal karakter Catatan Tambahan adalah :max karakter!',

                    'jsa_safety_permit_uuid.required' => 'Precaution & Hazard harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Precaution & Hazard adalah :max karakter!',

                    'knowing.required' => 'Mengetahui harus diisi!',
                    'knowing.max' => 'Maksimal karakter Mengetahui adalah :max karakter!',

                    'knowing_position.required' => 'Jabatan Mengetahui harus diisi!',
                    'knowing_position.max' => 'Maksimal karakter Jabatan Mengetahui adalah :max karakter!',

                    'approve_start_ptw_officer.required' => 'Approve Start PTW Officer harus diisi!',
                    'approve_start_ptw_officer.max' => 'Maksimal karakter Approve Start PTW Officer adalah :max karakter!',

                    'approve_start_maintenance_supervisor.required' => 'Approve Start Supervisor Pemeliharaan harus diisi!',
                    'approve_start_maintenance_supervisor.max' => 'Maksimal karakter Approve Start Supervisor Pemeliharaan adalah :max karakter!',

                    'approve_start_date.required' => 'Tanggal Approve Start harus diisi!',
                    'approve_start_date.max' => 'Maksimal karakter Tanggal Approve Start adalah :max karakter!',
                    'approve_start_date.date' => 'Format Tanggal Approve Start harus berupa tanggal!',

                    'approve_start_time.required' => 'Waktu Approve Start harus diisi!',
                    'approve_start_time.max' => 'Maksimal karakter Waktu Approve Start adalah :max karakter!',
                    'approve_start_time.date_format' => 'Format Waktu Approve Start harus berupa waktu!',

                    'clearance_ptw_officer.required' => 'Clearance PTW Officer harus diisi!',
                    'clearance_ptw_officer.max' => 'Maksimal karakter Clearance PTW Officer adalah :max karakter!',

                    'clearance_maintenance_supervisor.required' => 'Clearance Supervisor Pemeliharaan harus diisi!',
                    'clearance_maintenance_supervisor.max' => 'Maksimal karakter Clearance Supervisor Pemeliharaan adalah :max karakter!',

                    'third_party_person.max' => 'Maksimal karakter Orang Pihak Ketiga adalah :max karakter!',

                    'third_party_date.max' => 'Maksimal karakter Tanggal Pihak Ketiga adalah :max karakter!',
                    'third_party_date.date' => 'Format Tanggal Pihak Ketiga harus berupa waktu!',

                    'third_party_time.max' => 'Maksimal karakter Waktu Pihak Ketiga adalah :max karakter!',
                    'third_party_time.date_format' => 'Format Waktu Pihak Ketiga harus berupa waktu!',
                ];
            default:
                break;
        }
    }
}
