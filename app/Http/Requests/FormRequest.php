<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class FormRequest extends BaseFormRequest
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
                    'jsa_uuid' => 'required|max:255',
                    'jsa_safety_permit_uuid' => 'required|max:255',
                    'jsa_person_group_uuid' => 'required|max:255',
                    'to_carry_out_work' => 'required|max:255',
                    'unit_territory' => 'required|max:255',
                    'start_date' => 'required|max:255|date',
                    'finish_date' => 'required|max:255|date',
                    'start_time' => 'required|max:255|date_format:H:i',
                    'finish_time' => 'required|max:255|date_format:H:i',
                    'job_base_number' => 'required|max:255',
                    'company_or_field' => 'required|max:255',
                    'delay_start_date' => 'nullable|max:255|date',
                    'delay_finish_date' => 'nullable|max:255|date',
                    'delay_start_time' => 'nullable|max:255|date_format:H:i',
                    'delay_finish_time' => 'nullable|max:255|date_format:H:i',
                    'form_additional_note_uuid' => 'nullable|max:255',
                    'delay_excuse' => 'nullable|max:255',
                    'form_description_uuid' => 'nullable|max:255',
                    'form_protective_equipment_uuid' => 'required|max:255',
                    'jsa_worker_uuid' => 'required|max:255',
                    'approve_start_competent_person' => 'required|max:255',
                    'approve_start_production_supervisor' => 'required|max:255',
                    'approve_start_job_user' => 'required|max:255',
                    'approve_start_job_field' => 'required|max:255',
                    'clearance_competent_person' => 'required|max:255',
                    'clearance_production_supervisor' => 'required|max:255',
                    'clearance_job_user' => 'required|max:255',
                    'clearance_job_field' => 'required|max:255',
                    'third_party_person' => 'nullable|max:255',
                    'third_party_date' => 'nullable|max:255|date',
                    'third_party_time' => 'nullable|max:255|date_format:H:i',
                    'cancellation_competent_person' => 'nullable|max:255',
                    'cancellation_production_supervisor' => 'nullable|max:255',
                    'cancellation_job_user' => 'nullable|max:255',
                    'cancellation_job_field' => 'nullable|max:255',
                ];
            case 'PUT':
                $jsa_uuid = $this->route()->uuid;

                return [
                    'jsa_uuid' => 'required|max:255',
                    'jsa_safety_permit_uuid' => 'required|max:255',
                    'jsa_person_group_uuid' => 'required|max:255',
                    'to_carry_out_work' => 'required|max:255',
                    'unit_territory' => 'required|max:255',
                    'start_date' => 'required|max:255|date',
                    'finish_date' => 'required|max:255|date',
                    'start_time' => 'required|max:255|date_format:H:i',
                    'finish_time' => 'required|max:255|date_format:H:i',
                    'job_base_number' => 'required|max:255',
                    'company_or_field' => 'required|max:255',
                    'delay_start_date' => 'nullable|max:255|date',
                    'delay_finish_date' => 'nullable|max:255|date',
                    'delay_start_time' => 'nullable|max:255|date_format:H:i',
                    'delay_finish_time' => 'nullable|max:255|date_format:H:i',
                    'delay_excuse' => 'nullable|max:255',
                    'form_additional_note_uuid' => 'nullable|max:255',
                    'form_description_uuid' => 'nullable|max:255',
                    'form_protective_equipment_uuid' => 'required|max:255',
                    'jsa_worker_uuid' => 'required|max:255',
                    'approve_start_competent_person' => 'required|max:255',
                    'approve_start_production_supervisor' => 'required|max:255',
                    'approve_start_job_user' => 'required|max:255',
                    'approve_start_job_field' => 'required|max:255',
                    'clearance_competent_person' => 'required|max:255',
                    'clearance_production_supervisor' => 'required|max:255',
                    'clearance_job_user' => 'required|max:255',
                    'clearance_job_field' => 'required|max:255',
                    'third_party_person' => 'nullable|max:255',
                    'third_party_date' => 'nullable|max:255|date',
                    'third_party_time' => 'nullable|max:255|date_format:H:i',
                    'cancellation_competent_person' => 'nullable|max:255',
                    'cancellation_production_supervisor' => 'nullable|max:255',
                    'cancellation_job_user' => 'nullable|max:255',
                    'cancellation_job_field' => 'nullable|max:255',
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
                    'jsa_uuid.required' => 'JSA harus dipilih!',
                    'jsa_uuid.max' => 'Maksimal karakter JSA adalah :max karakter!',

                    'jsa_safety_permit_uuid.required' => 'Safety Permit harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Safety Permit adalah :max karakter!',

                    'jsa_person_group_uuid.required' => 'Diminta Oleh harus dipilih!',
                    'jsa_person_group_uuid.max' => 'Maksimal karakter Diminta Oleh adalah :max karakter!',

                    'to_carry_out_work.required' => 'Untuk Melaksanakan Pekerjaan harus diisi!',
                    'to_carry_out_work.max' => 'Maksimal karakter Untuk Melaksanakan Pekerjaan adalah :max karakter!',

                    'unit_territory.required' => 'Lokasi harus diisi!',
                    'unit_territory.max' => 'Maksimal karakter Lokasi adalah :max karakter!',

                    'job_base.required' => 'Dasar Pekerjaan (WO/SPK) harus diisi!',
                    'job_base.max' => 'Maksimal karakter Dasar Pekerjaan (WO/SPK) adalah :max karakter!',

                    'company_or_field.required' => 'Bidang / Perusahaan harus diisi!',
                    'company_or_field.max' => 'Maksimal karakter Bidang / Perusahaan adalah :max karakter!',

                    'location.required' => 'Lokasi harus diisi!',
                    'location.max' => 'Maksimal karakter Lokasi adalah :max karakter!',

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

                    'job_base_number.required' => 'Nomer WO harus diisi!',
                    'job_base_number.max' => 'Maksimal karakter Nomer WO adalah :max karakter!',

                    'delay_start_date.max' => 'Maksimal karakter Tanggal mulai ditunda adalah :max karakter!',
                    'delay_start_date.date' => 'Format Tanggal mulai hari kerja harus berupa tanggal!',

                    'delay_finish_date.max' => 'Maksimal karakter Tanggal mulai kerja dari penundaan adalah :max karakter!',
                    'delay_finish_date.date' => 'Format Tanggal mulai kerja dari penundaan harus berupa tanggal!',

                    'delay_start_time.max' => 'Maksimal karakter Waktu mulai ditunda adalah :max karakter!',
                    'delay_start_time.date_format' => 'Format Waktu mulai ditunda harus berupa waktu!',

                    'delay_finish_time.max' => 'Maksimal karakter Waktu mulai kerja dari penundaan adalah :max karakter!',
                    'delay_finish_time.date_format' => 'Format Waktu mulai kerja dari penundaan harus berupa waktu!',

                    'delay_excuse.max' => 'Maksimal karakter Sebab Penundaan adalah :max karakter!',

                    'additional_note.max' => 'Maksimal karakter Sebab Penundaan adalah :max karakter!',

                    'form_additional_note_uuid.required' => 'Catatan Tambahan harus dipilih!',
                    'form_additional_note_uuid.max' => 'Maksimal karakter Catatan Tambahan adalah :max karakter!',

                    'form_description_uuid.max' => 'Maksimal karakter Deskripsi adalah :max karakter!',

                    'form_protective_equipment_uuid.required' => 'Alat Pelindung diri harus dipilih!',
                    'form_protective_equipment_uuid.max' => 'Maksimal karakter Alat Pelindung diri adalah :max karakter!',

                    'jsa_worker_uuid.required' => 'Pekerja harus dipilih!',
                    'jsa_worker_uuid.max' => 'Maksimal karakter Pekerja adalah :max karakter!',

                    'approve_start_competent_person.required' => 'Approve Start Competent Person harus dipilih!',
                    'approve_start_competent_person.max' => 'Maksimal karakter Approve Start Competent Person adalah :max karakter!',

                    'approve_start_production_supervisor.required' => 'Approve Start Supervisor Produksi harus dipilih!',
                    'approve_start_production_supervisor.max' => 'Maksimal karakter Approve Start Supervisor Produksi adalah :max karakter!',

                    'approve_start_job_user.required' => 'Approve Start User harus diisi!',
                    'approve_start_job_user.max' => 'Maksimal karakter Approve Start User adalah :max karakter!',

                    'approve_start_job_field.required' => 'Bidang Approve Start User harus diisi!',
                    'approve_start_job_field.max' => 'Maksimal karakter Bidang Approve Start User adalah :max karakter!',

                    'clearance_competent_person.required' => 'Clearance Competent Person harus dipilih!',
                    'clearance_competent_person.max' => 'Maksimal karakter Clearance Competent Person adalah :max karakter!',

                    'clearance_production_supervisor.required' => 'Clearance Supervisor Produksi harus dipilih!',
                    'clearance_production_supervisor.max' => 'Maksimal karakter Clearance Supervisor Produksi adalah :max karakter!',

                    'clearance_job_user.required' => 'Clearance User harus diisi!',
                    'clearance_job_user.max' => 'Maksimal karakter Clearance User adalah :max karakter!',

                    'clearance_job_field.required' => 'Bidang Clearance User harus diisi!',
                    'clearance_job_field.max' => 'Maksimal karakter Bidang Clearance User adalah :max karakter!',

                    'third_party_person.max' => 'Maksimal karakter Orang Pihak Ketiga adalah :max karakter!',

                    'third_party_date.max' => 'Maksimal karakter Tanggal Pihak Ketiga adalah :max karakter!',
                    'third_party_date.date' => 'Format Tanggal Pihak Ketiga harus berupa tanggal!',

                    'third_party_time.max' => 'Maksimal karakter Waktu Pihak Ketiga adalah :max karakter!',
                    'third_party_time.date_format' => 'Format Waktu Pihak Ketiga harus berupa waktu!',

                    'cancellation_competent_person.max' => 'Maksimal karakter Clearance Start Competent Person adalah :max karakter!',

                    'cancellation_production_supervisor.required' => 'Clearance Supervisor Produksi harus dipilih!',
                    'cancellation_production_supervisor.max' => 'Maksimal karakter Clearance Supervisor Produksi adalah :max karakter!',

                    'cancellation_job_user.max' => 'Maksimal karakter Clearance User adalah :max karakter!',

                    'cancellation_job_field.max' => 'Maksimal karakter Bidang Cancellation User Produksi adalah :max karakter!',
                ];
            case 'PUT':
                return [
                    'jsa_uuid.required' => 'JSA harus dipilih!',
                    'jsa_uuid.max' => 'Maksimal karakter JSA adalah :max karakter!',

                    'jsa_safety_permit_uuid.required' => 'Safety Permit harus dipilih!',
                    'jsa_safety_permit_uuid.max' => 'Maksimal karakter Safety Permit adalah :max karakter!',

                    'jsa_person_group_uuid.required' => 'Diminta Oleh harus dipilih!',
                    'jsa_person_group_uuid.max' => 'Maksimal karakter Diminta Oleh adalah :max karakter!',

                    'to_carry_out_work.required' => 'Untuk Melaksanakan Pekerjaan harus diisi!',
                    'to_carry_out_work.max' => 'Maksimal karakter Untuk Melaksanakan Pekerjaan adalah :max karakter!',

                    'unit_territory.required' => 'Lokasi harus diisi!',
                    'unit_territory.max' => 'Maksimal karakter Lokasi adalah :max karakter!',

                    'job_base.required' => 'Dasar Pekerjaan (WO/SPK) harus diisi!',
                    'job_base.max' => 'Maksimal karakter Dasar Pekerjaan (WO/SPK) adalah :max karakter!',

                    'company_or_field.required' => 'Bidang / Perusahaan harus diisi!',
                    'company_or_field.max' => 'Maksimal karakter Bidang / Perusahaan adalah :max karakter!',

                    'location.required' => 'Lokasi harus diisi!',
                    'location.max' => 'Maksimal karakter Lokasi adalah :max karakter!',

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

                    'job_base_number.required' => 'Nomer WO harus diisi!',
                    'job_base_number.max' => 'Maksimal karakter Nomer WO adalah :max karakter!',

                    'delay_start_date.max' => 'Maksimal karakter Tanggal mulai ditunda adalah :max karakter!',
                    'delay_start_date.date' => 'Format Tanggal mulai hari kerja harus berupa tanggal!',

                    'delay_finish_date.max' => 'Maksimal karakter Tanggal mulai kerja dari penundaan adalah :max karakter!',
                    'delay_finish_date.date' => 'Format Tanggal mulai kerja dari penundaan harus berupa tanggal!',

                    'delay_start_time.max' => 'Maksimal karakter Waktu mulai ditunda adalah :max karakter!',
                    'delay_start_time.date_format' => 'Format Waktu mulai ditunda harus berupa waktu!',

                    'delay_finish_time.max' => 'Maksimal karakter Waktu mulai kerja dari penundaan adalah :max karakter!',
                    'delay_finish_time.date_format' => 'Format Waktu mulai kerja dari penundaan harus berupa waktu!',

                    'delay_excuse.max' => 'Maksimal karakter Sebab Penundaan adalah :max karakter!',

                    'additional_note.max' => 'Maksimal karakter Sebab Penundaan adalah :max karakter!',

                    'form_description_uuid.required' => 'Deskripsi harus dipilih!',
                    'form_additional_note_uuid.max' => 'Maksimal karakter Catatan Tambahan adalah :max karakter!',

                    'form_description_uuid.max' => 'Maksimal karakter Deskripsi adalah :max karakter!',

                    'form_protective_equipment_uuid.required' => 'Alat Pelindung diri harus dipilih!',
                    'form_protective_equipment_uuid.max' => 'Maksimal karakter Alat Pelindung diri adalah :max karakter!',

                    'jsa_worker_uuid.required' => 'Pekerja harus dipilih!',
                    'jsa_worker_uuid.max' => 'Maksimal karakter Pekerja adalah :max karakter!',

                    'approve_start_competent_person.required' => 'Approve Start Competent Person harus dipilih!',
                    'approve_start_competent_person.max' => 'Maksimal karakter Approve Start Competent Person adalah :max karakter!',

                    'approve_start_production_supervisor.required' => 'Approve Start Supervisor Produksi harus dipilih!',
                    'approve_start_production_supervisor.max' => 'Maksimal karakter Approve Start Supervisor Produksi adalah :max karakter!',

                    'approve_start_job_user.required' => 'Approve Start User harus diisi!',
                    'approve_start_job_user.max' => 'Maksimal karakter Approve Start User adalah :max karakter!',

                    'approve_start_job_field.required' => 'Bidang Approve Start User harus diisi!',
                    'approve_start_job_field.max' => 'Maksimal karakter Bidang Approve Start User adalah :max karakter!',

                    'clearance_competent_person.required' => 'Clearance Competent Person harus dipilih!',
                    'clearance_competent_person.max' => 'Maksimal karakter Clearance Competent Person adalah :max karakter!',

                    'clearance_production_supervisor.required' => 'Clearance Supervisor Produksi harus dipilih!',
                    'clearance_production_supervisor.max' => 'Maksimal karakter Clearance Supervisor Produksi adalah :max karakter!',

                    'clearance_job_user.required' => 'Clearance User harus diisi!',
                    'clearance_job_user.max' => 'Maksimal karakter Clearance User adalah :max karakter!',

                    'clearance_job_field.required' => 'Bidang Clearance User harus diisi!',
                    'clearance_job_field.max' => 'Maksimal karakter Bidang Clearance User adalah :max karakter!',

                    'third_party_person.max' => 'Maksimal karakter Orang Pihak Ketiga adalah :max karakter!',

                    'third_party_date.max' => 'Maksimal karakter Tanggal Pihak Ketiga adalah :max karakter!',
                    'third_party_date.date' => 'Format Tanggal Pihak Ketiga harus berupa tanggal!',

                    'third_party_time.max' => 'Maksimal karakter Waktu Pihak Ketiga adalah :max karakter!',
                    'third_party_time.date_format' => 'Format Waktu Pihak Ketiga harus berupa waktu!',

                    'cancellation_competent_person.max' => 'Maksimal karakter Clearance Start Competent Person adalah :max karakter!',

                    'cancellation_production_supervisor.required' => 'Clearance Supervisor Produksi harus dipilih!',
                    'cancellation_production_supervisor.max' => 'Maksimal karakter Clearance Supervisor Produksi adalah :max karakter!',

                    'cancellation_job_user.max' => 'Maksimal karakter Clearance User adalah :max karakter!',

                    'cancellation_job_field.max' => 'Maksimal karakter Bidang Cancellation User Produksi adalah :max karakter!',
                ];
            default:
                break;
        }
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new ValidationException(
    //         $validator,
    //         dd($validator->errors())

    //     );
    // }
}


