@extends('components.master')
@section('title', 'SASANDO | Safety Permit - create')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Buat Safety Permit
                        </h2>
                        <div class="text-muted mt-1">Field dengan tanda "<span class="text-danger">*</span>" tidak boleh
                            dikosongkan!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-12">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="card" method="POST" action="/forms-store">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="jsa_uuid">JSA</label>
                                                    <select class="form-select @error('jsa_uuid') is-invalid @enderror"
                                                        name="jsa_uuid" id="jsa_uuid">
                                                        <option selected disabled>Pilih JSA</option>
                                                        @foreach ($jsas as $jsa)
                                                            <option value="{{ $jsa->uuid }}"
                                                                {{ old('jsa_uuid') == $jsa->uuid ? 'selected' : '' }}>
                                                                {{ $jsa->name . ' ( ' . $jsa->job_base . ' )' }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="jsa_uuid">Safety
                                                        Permit</label>
                                                    <select
                                                        class="form-select @error('jsa_safety_permit_uuid') is-invalid @enderror"
                                                        name="jsa_safety_permit_uuid" id="jsa_safety_permit_uuid" disabled>
                                                        <option selected disabled>Pilih Safety Permit</option>
                                                        @foreach ($safety_permits as $safety_permit)
                                                            <option value="{{ $safety_permit->uuid }}"
                                                                {{ old('jsa_safety_permit_uuid') == $safety_permit->uuid ? 'selected' : '' }}>
                                                                {{ $safety_permit->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if (!old('jsa_safety_permit_uuid', []) && !old('jsa_uuid', []))
                                                        <small id="form-hint-sp1" class="form-hint text-danger">
                                                            Pilih JSA terlebih dahulu!
                                                        </small>
                                                    @endif
                                                    @error('jsa_safety_permit_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="jsa_person_group_uuid">Diminta
                                                        Oleh</label>
                                                    <select
                                                        class="form-select @error('jsa_person_group_uuid') is-invalid @enderror"
                                                        name="jsa_person_group_uuid" id="jsa_person_group_uuid">
                                                        <option selected disabled>Pilih Diminta Oleh</option>
                                                        @foreach ($person_groups as $person_group)
                                                            <option value="{{ $person_group->uuid }}"
                                                                {{ old('jsa_person_group_uuid') == $person_group->uuid ? 'selected' : '' }}>
                                                                {{ $person_group->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_person_group_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="to_carry_out_work">Untuk
                                                        Melaksanakan Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('to_carry_out_work') is-invalid @enderror"
                                                        id="to_carry_out_work" name="to_carry_out_work"
                                                        placeholder="Masukkan Untuk Melaksanakan Pekerjaan"
                                                        value="{{ old('to_carry_out_work') }}">
                                                    @error('to_carry_out_work')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="unit_territory">Lokasi (Unit #,
                                                        Daerah)</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('unit_territory') is-invalid @enderror"
                                                        id="unit_territory" name="unit_territory"
                                                        placeholder="Masukkan Lokasi (Unit #, Daerah)"
                                                        value="{{ old('unit_territory') }}">
                                                    @error('unit_territory')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="myDatePickerDateStart">Tanggal
                                                        mulai hari
                                                        kerja </label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('start_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart" name="start_date"
                                                            placeholder="Masukkan tanggal mulai"
                                                            value="{{ old('start_date') }}">
                                                        @error('start_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="myDatePickerDateFinish">Tanggal
                                                        selesai hari kerja</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('finish_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateFinish" name="finish_date"
                                                            placeholder="Masukkan tanggal selesai"
                                                            value="{{ old('finish_date') }}">
                                                        @error('finish_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="myDatePickerTimeStart">Waktu
                                                        mulai jam kerja</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('start_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeStart" name="start_time"
                                                            placeholder="Masukkan waktu mulai"
                                                            value="{{ old('start_time') }}">
                                                        @error('start_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="myDatePickerTimeFinish">Waktu
                                                        selesai jam kerja</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('finish_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeFinish" name="finish_time"
                                                            placeholder="Masukkan waktu selesai"
                                                            value="{{ old('finish_time') }}">
                                                        @error('finish_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="job_base_number">Nomer
                                                        WO</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('job_base_number') is-invalid @enderror"
                                                        id="job_base_number" name="job_base_number"
                                                        placeholder="Masukkan Nomer WO"
                                                        value="{{ old('job_base_number') }}">
                                                    @error('job_base_number')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="company_or_field">Bidang /
                                                        Perusahaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('company_or_field') is-invalid @enderror"
                                                        id="company_or_field" name="company_or_field"
                                                        placeholder="Masukkan Bidang / Perusahaan"
                                                        value="{{ old('company_or_field') }}">
                                                    @error('company_or_field')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="myDatePickerDateStart">Tanggal
                                                        mulai ditunda </label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('delay_start_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart"
                                                            name="delay_start_date"
                                                            placeholder="Masukkan tanggal mulai ditunda"
                                                            value="{{ old('delay_start_date') }}">
                                                        @error('delay_start_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="myDatePickerDateFinish">Tanggal
                                                        mulai kerja dari penundaan</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('delay_finish_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateFinish"
                                                            name="delay_finish_date"
                                                            placeholder="Masukkan tanggal mulai kerja dari penundaan"
                                                            value="{{ old('delay_finish_date') }}">
                                                        @error('delay_finish_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="myDatePickerTimeStart">Waktu
                                                        mulai ditunda</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('delay_start_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeStart"
                                                            name="delay_start_time"
                                                            placeholder="Masukkan waktu mulai ditunda"
                                                            value="{{ old('delay_start_time') }}">
                                                        @error('delay_start_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="myDatePickerTimeFinish">Waktu mulai
                                                        kerja dari penundaan</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('delay_finish_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeFinish"
                                                            name="delay_finish_time"
                                                            placeholder="Masukkan waktu mulai
                                                            kerja dari penundaan"
                                                            value="{{ old('delay_finish_time') }}">
                                                        @error('delay_finish_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label" for="delay_excuse">Sebab
                                                        Penundaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('delay_excuse') is-invalid @enderror"
                                                        id="delay_excuse" name="delay_excuse"
                                                        placeholder="MasukkanSebab Penundaan"
                                                        value="{{ old('delay_excuse') }}">
                                                    @error('delay_excuse')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label"
                                                        for="multiple-select-field-additional_note">Catatan
                                                        Tambahan</label>
                                                    <select
                                                        class="form-select @error('form_additional_note_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-additional_note"
                                                        name="form_additional_note_uuid[]"
                                                        data-placeholder="Pilih Catatan Tambahan" multiple>
                                                        @foreach ($additional_notes as $additional_note)
                                                            <option class="text-sm" value="{{ $additional_note->uuid }}"
                                                                {{ in_array($additional_note->uuid, old('form_additional_note_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $additional_note->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('form_additional_note_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label"
                                                        for="multiple-select-field-description">Deskripsi</label>
                                                    <select
                                                        class="form-select @error('form_description_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-description"
                                                        name="form_description_uuid[]" data-placeholder="Pilih Deskripsi"
                                                        multiple @if (!old('form_description_uuid', []) && !old('jsa_safety_permit_uuid')) disabled @endif>
                                                        @foreach ($descriptions as $description)
                                                            <option class="text-sm" value="{{ $description->uuid }}"
                                                                {{ in_array($description->uuid, old('form_description_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $description->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if (!old('form_description_uuid', []) && !old('jsa_safety_permit_uuid'))
                                                        <small id="form-hint" class="form-hint text-danger">
                                                            Pilih Safety Permit terlebih dahulu!
                                                        </small>
                                                    @endif
                                                    @error('form_description_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-protective_equipment">Alat Pelindung
                                                        diri</label>
                                                    <select
                                                        class="form-select @error('form_protective_equipment_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-protective_equipment"
                                                        name="form_protective_equipment_uuid[]"
                                                        data-placeholder="Pilih Alat Pelindung diri" multiple>
                                                        @foreach ($protective_equipments as $protective_equipment)
                                                            <option class="text-sm"
                                                                value="{{ $protective_equipment->uuid }}"
                                                                {{ in_array($protective_equipment->uuid, old('form_protective_equipment_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $protective_equipment->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('form_protective_equipment_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-jsa_worker">Pekerja</label>
                                                    <select
                                                        class="form-select @error('jsa_worker_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-jsa_worker" name="jsa_worker_uuid[]"
                                                        data-placeholder="Pilih Pekerja" multiple>
                                                        @foreach ($workers as $worker)
                                                            <option class="text-sm" value="{{ $worker->uuid }}"
                                                                {{ in_array($worker->uuid, old('jsa_worker_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $worker->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_worker_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="approve_start_competent_person">Approve Start Competent
                                                        Person</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('approve_start_competent_person') is-invalid @enderror"
                                                        id="approve_start_competent_person"
                                                        name="approve_start_competent_person"
                                                        value="{{ old('approve_start_competent_person') }}"
                                                        placeholder="Masukkan Approve Start Competent Person">
                                                    @error('approve_start_competent_person')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="approve_start_production_supervisor">Approve Start Supervisor
                                                        Produksi</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('approve_start_production_supervisor') is-invalid @enderror"
                                                        id="approve_start_production_supervisor"
                                                        name="approve_start_production_supervisor"
                                                        value="{{ old('approve_start_production_supervisor') }}"
                                                        placeholder="Masukkan Approve Start Supervisor Produksi">
                                                    @error('approve_start_production_supervisor')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="approve_start_job_field">Bidang
                                                        Approve Start User Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('approve_start_job_field') is-invalid @enderror"
                                                        id="approve_start_job_field" name="approve_start_job_field"
                                                        value="{{ old('approve_start_job_field') }}"
                                                        placeholder="Masukkan Bidang Approve Start User Pekerjaan">
                                                    @error('approve_start_job_field')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="approve_start_job_user">Approve
                                                        Start User Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('approve_start_job_user') is-invalid @enderror"
                                                        id="approve_start_job_user" name="approve_start_job_user"
                                                        value="{{ old('approve_start_job_user') }}"
                                                        placeholder="Masukkan Approve Start User Pekerjaan">
                                                    @error('approve_start_job_user')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="clearance_competent_person">Clearance Competent
                                                        Person</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('clearance_competent_person') is-invalid @enderror"
                                                        id="clearance_competent_person" name="clearance_competent_person"
                                                        value="{{ old('clearance_competent_person') }}"
                                                        placeholder="Masukkan Clearance Competent Person">
                                                    @error('clearance_competent_person')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="clearance_production_supervisor">Clearance Supervisor
                                                        Pekerja</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('clearance_production_supervisor') is-invalid @enderror"
                                                        id="clearance_production_supervisor"
                                                        name="clearance_production_supervisor"
                                                        value="{{ old('clearance_production_supervisor') }}"
                                                        placeholder="Masukkan Clearance Supervisor Pekerja">
                                                    @error('clearance_production_supervisor')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="clearance_job_field">Bidang
                                                        Clearance
                                                        User Pekerja</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('clearance_job_field') is-invalid @enderror"
                                                        id="clearance_job_field" name="clearance_job_field"
                                                        value="{{ old('clearance_job_field') }}"
                                                        placeholder="Masukkan Bidang Clearance User Pekerja">
                                                    @error('clearance_job_field')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="clearance_job_user">Clearance
                                                        User Pekerja</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('clearance_job_user') is-invalid @enderror"
                                                        id="clearance_job_user" name="clearance_job_user"
                                                        value="{{ old('clearance_job_user') }}"
                                                        placeholder="Masukkan Clearance User Pekerja">
                                                    @error('clearance_job_user')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="third_party_person">Orang
                                                        Pihak
                                                        Ketiga</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('third_party_person') is-invalid @enderror"
                                                        id="third_party_person" name="third_party_person"
                                                        value="{{ old('third_party_person') }}"
                                                        placeholder="Masukkan Orang Pihak Ketiga">
                                                    @error('third_party_person')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="myDatePickerDateFinish">Tanggal (Pihak
                                                        ke 3)</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('third_party_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateFinish"
                                                            name="third_party_date"
                                                            placeholder="Masukkan tanggal (Pihak ke 3)"
                                                            value="{{ old('third_party_date') }}">
                                                        @error('third_party_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="myDatePickerTimeStart">Waktu
                                                        (Pihak ke 3)</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('third_party_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeStart"
                                                            name="third_party_time"
                                                            placeholder="Masukkan waktu (Pihak ke 3)"
                                                            value="{{ old('third_party_time') }}">
                                                        @error('third_party_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label"
                                                        for="cancellation_competent_person">Cancellation Competent
                                                        Person</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('cancellation_competent_person') is-invalid @enderror"
                                                        id="cancellation_competent_person"
                                                        name="cancellation_competent_person"
                                                        value="{{ old('cancellation_competent_person') }}"
                                                        placeholder="Masukkan Cancellation Competent Person">
                                                    @error('cancellation_competent_person')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label"
                                                        for="cancellation_production_supervisor">Cancellation Supervisor
                                                        Produksi</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('cancellation_production_supervisor') is-invalid @enderror"
                                                        id="cancellation_production_supervisor"
                                                        name="cancellation_production_supervisor"
                                                        value="{{ old('cancellation_production_supervisor') }}"
                                                        placeholder="Masukkan Cancellation Supervisor Produksi">
                                                    @error('cancellation_production_supervisor')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="cancellation_job_field">Bidang

                                                        Cancellation
                                                        User Produksi</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('cancellation_job_field') is-invalid @enderror"
                                                        id="cancellation_job_field" name="cancellation_job_field"
                                                        value="{{ old('cancellation_job_field') }}"
                                                        placeholder="Masukkan Bidang Cancellation User Produksi">
                                                    @error('cancellation_job_field')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label" for="cancellation_job_user">Cancellation
                                                        User Produksi</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('cancellation_job_user') is-invalid @enderror"
                                                        id="cancellation_job_user" name="cancellation_job_user"
                                                        value="{{ old('cancellation_job_user') }}"
                                                        placeholder="Masukkan Cancellation User Produksi">
                                                    @error('cancellation_job_user')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/forms" class="btn btn-danger btn-md">Batal</a>
                                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var idJSA

                if ($("#jsa_uuid").val() == null) {

                    $("#jsa_uuid").change(function() {

                        var html;

                        idJSA = $(this).val();
                        $.ajax({
                            url: "{{ route('jsas-jsa_jsa_safety_permit_request') }}",
                            method: 'GET',
                            cache: false,
                            dataType: 'json',
                            success: function(data) {

                                if (data[0].length > 0) {

                                    data[0].forEach(jsa => {

                                        if (jsa.uuid == idJSA) {

                                            if (jsa.form[0]) {

                                                if (jsa.form[0].start_date !==
                                                    null &&
                                                    jsa.form[0].finish_date !==
                                                    null &&
                                                    jsa.form[0].start_time !==
                                                    null &&
                                                    jsa.form[0].finish_time !==
                                                    null) {

                                                    disableField(jsa.form[0])

                                                }
                                            } else {

                                                enableField()
                                            }

                                            if (jsa.jsa_jsa_safety_permit) {

                                                jsa.jsa_jsa_safety_permit.forEach(
                                                    jsa_jsa_safety_permit => {
                                                        html += `<option value="` +
                                                            jsa_jsa_safety_permit
                                                            .jsa_safety_permit.uuid +
                                                            `">` + jsa_jsa_safety_permit
                                                            .jsa_safety_permit.name +
                                                            `</option>`;
                                                    });
                                                $('#jsa_safety_permit_uuid').prop(
                                                    'disabled', false);
                                                $('#form-hint-sp1').hide();
                                                $('#jsa_safety_permit_uuid').html(
                                                    `<option selected disabled>Pilih Safety Permit</option>` +
                                                    html);
                                            }
                                        }

                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });
                } else {

                    var html2;

                    idJSA = $("#jsa_uuid").val()
                    $.ajax({
                        url: "{{ route('jsas-jsa_jsa_safety_permit_request') }}",
                        method: 'GET',
                        cache: false,
                        dataType: 'json',
                        success: function(data) {

                            if (data[0].length > 0) {

                                data[0].forEach(jsa => {

                                    if (jsa.uuid == idJSA) {

                                        if (jsa.form[0]) {

                                            if (jsa.form[0].start_date !==
                                                null &&
                                                jsa.form[0].finish_date !==
                                                null &&
                                                jsa.form[0].start_time !==
                                                null &&
                                                jsa.form[0].finish_time !==
                                                null) {

                                                disableField(jsa.form[0])

                                            }

                                        } else {

                                            enableField(`{{ old('start_date') }}`,
                                                `{{ old('finish_date') }}`,
                                                `{{ old('start_time') }}`,
                                                `{{ old('finish_time') }}`)
                                        }

                                        var temp =
                                            `{{ old('jsa_safety_permit_uuid') }}`;

                                        if (temp == null) {

                                            if (jsa.jsa_jsa_safety_permit) {

                                                jsa.jsa_jsa_safety_permit.forEach(
                                                    jsa_jsa_safety_permit => {
                                                        html2 += `<option value="` +
                                                            jsa_jsa_safety_permit
                                                            .jsa_safety_permit.uuid +
                                                            `">` + jsa_jsa_safety_permit
                                                            .jsa_safety_permit.name +
                                                            `</option>`;
                                                    });
                                                $('#jsa_safety_permit_uuid').prop(
                                                    'disabled', false);
                                                $('#jsa_safety_permit_uuid').html(
                                                    `<option selected disabled>Pilih Safety Permit</option>` +
                                                    html2);
                                            }
                                        } else {

                                            if (jsa.jsa_jsa_safety_permit) {

                                                jsa.jsa_jsa_safety_permit.forEach(
                                                    jsa_jsa_safety_permit => {

                                                        if (temp == jsa_jsa_safety_permit
                                                            .jsa_safety_permit.uuid) {

                                                            html2 +=
                                                                `<option selected value="` +
                                                                jsa_jsa_safety_permit
                                                                .jsa_safety_permit.uuid +
                                                                `">` + jsa_jsa_safety_permit
                                                                .jsa_safety_permit.name +
                                                                `</option>`;
                                                        } else {

                                                            html2 += `<option value="` +
                                                                jsa_jsa_safety_permit
                                                                .jsa_safety_permit.uuid +
                                                                `">` + jsa_jsa_safety_permit
                                                                .jsa_safety_permit.name +
                                                                `</option>`;
                                                        }
                                                    });
                                                $('#jsa_safety_permit_uuid').prop(
                                                    'disabled', false);
                                                $('#jsa_safety_permit_uuid').html(
                                                    `<option selected disabled>Pilih Safety Permit</option>` +
                                                    html2);
                                            }
                                        }
                                    }
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });

                    $("#jsa_uuid").change(function() {

                        var html;

                        idJSA = $(this).val();
                        $.ajax({
                            url: "{{ route('jsas-jsa_jsa_safety_permit_request') }}",
                            method: 'GET',
                            cache: false,
                            dataType: 'json',
                            success: function(data) {

                                if (data[0].length > 0) {

                                    data[0].forEach(jsa => {

                                        if (jsa.uuid == idJSA) {



                                            if (jsa.jsa_jsa_safety_permit) {

                                                jsa.jsa_jsa_safety_permit.forEach(
                                                    jsa_jsa_safety_permit => {
                                                        html += `<option value="` +
                                                            jsa_jsa_safety_permit
                                                            .jsa_safety_permit
                                                            .uuid +
                                                            `">` +
                                                            jsa_jsa_safety_permit
                                                            .jsa_safety_permit
                                                            .name +
                                                            `</option>`;
                                                    });
                                                $('#jsa_safety_permit_uuid').prop(
                                                    'disabled', false);
                                                $('#jsa_safety_permit_uuid').html(
                                                    `<option selected disabled>Pilih Safety Permit</option>` +
                                                    html);
                                            }

                                        }

                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });
                }

                function disableField(temp) {
                    $('#info1').remove();
                    $('[name="start_date"]')
                        .val(temp.start_date)
                        .addClass("disabledField")
                        .after(
                            `<small id="info1" class="form-hint text-danger">Tanggal Mulai mengikuti Safety Permit yang Pertama!</small>`
                        );
                    $('#info2').remove();
                    $('[name="finish_date"]')
                        .val(temp.finish_date)
                        .addClass("disabledField")
                        .after(
                            `<small id="info2" class="form-hint text-danger">Tanggal Selesai mengikuti Safety Permit yang Pertama!</small>`
                        );
                    $('#info3').remove();
                    $('[name="start_time"]')
                        .val(temp.start_time)
                        .addClass("disabledField")
                        .after(
                            `<small id="info3" class="form-hint text-danger">Waktu Mulai mengikuti Safety Permit yang Pertama!</small>`
                        );
                    $('#info4').remove();
                    $('[name="finish_time"]')
                        .val(temp.finish_time)
                        .addClass("disabledField")
                        .after(
                            `<small id="info4" class="form-hint text-danger">Waktu Selesai mengikuti Safety Permit yang Pertama!</small>`
                        );
                }

                function enableField() {
                    $('[name="start_date"]').val('').removeClass("disabledField");
                    $('#info1').remove();
                    $('[name="finish_date"]').val('').removeClass("disabledField");
                    $('#info2').remove();
                    $('[name="start_time"]').val('').removeClass("disabledField");
                    $('#info3').remove();
                    $('[name="finish_time"]').val('').removeClass("disabledField");
                    $('#info4').remove();
                }

            });
        </script>
        <style>
            .disabledField {
                background-color: #f0f0f0;
                color: #666666;
                pointer-events: none;
            }
        </style>

    @endsection
