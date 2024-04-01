@extends('components.master')
@section('title', 'SASANDO | JSA - create')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Buat JSA
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
                                    <form class="card" method="POST" action="/jsas-store">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="name">Nama Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name" value="{{ old('name') }}"
                                                        placeholder="Masukkan Nama Pekerjaan">
                                                    <small class="form-hint">
                                                        Nama Pekerjaan sesuai Task WO!
                                                    </small>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="job_base">Dasar Pekerjaan
                                                        (WO/SPK)</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('job_base') is-invalid @enderror"
                                                        id="job_base" name="job_base" value="{{ old('job_base') }}"
                                                        placeholder="Masukkan Dasar Pekerjaan">
                                                    @error('job_base')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="location">Lokasi</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('location') is-invalid @enderror"
                                                        id="location" name="location" placeholder="Masukkan Lokasi"
                                                        value="{{ old('location') }}">
                                                    @error('location')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="person_group_uuid">Pelaksana
                                                        Pekerjaan</label>
                                                    <select
                                                        class="form-select @error('person_group_uuid') is-invalid @enderror"
                                                        name="person_group_uuid" id="person_group_uuid">
                                                        <option selected disabled>Pilih Pelaksana Pekerjaan</option>
                                                        @foreach ($person_groups as $person_group)
                                                            <option value="{{ $person_group->uuid }}"
                                                                {{ old('person_group_uuid') == $person_group->uuid ? 'selected' : '' }}>
                                                                {{ $person_group->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('person_group_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
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
                                                            value="{{ old('finish_date') }}">
                                                        @error('finish_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-safety-permits">Safety
                                                        Permits</label>
                                                    <select
                                                        class="form-select @error('jsa_safety_permit_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-safety-permits"
                                                        name="jsa_safety_permit_uuid[]"
                                                        data-placeholder="Pilih Safety Permit" multiple>
                                                        @foreach ($safety_permits as $safety_permit)
                                                            <option class="text-sm" value="{{ $safety_permit->uuid }}"
                                                                {{ in_array($safety_permit->uuid, old('jsa_safety_permit_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $safety_permit->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_safety_permit_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-workers">Pekerja</label>
                                                    <select
                                                        class="form-select @error('jsa_worker_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-workers" name="jsa_worker_uuid[]"
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
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-work-tools">Tools
                                                        Kerja</label>
                                                    <select
                                                        class="form-select @error('jsa_work_tool_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-work-tools" name="jsa_work_tool_uuid[]"
                                                        data-placeholder="Pilih Tool Kerja" multiple>
                                                        @foreach ($work_tools as $work_tool)
                                                            <option class="text-sm" value="{{ $work_tool->uuid }}"
                                                                {{ in_array($work_tool->uuid, old('jsa_work_tool_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $work_tool->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_work_tool_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-work-stages">Tahapan Kerja</label>
                                                    <select
                                                        class="form-select @error('jsa_work_stage_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-work-stages"
                                                        name="jsa_work_stage_uuid[]"
                                                        data-placeholder="Pilih Tahapan Kerja" multiple>
                                                        @foreach ($work_stages as $work_stage)
                                                            <option class="text-sm" value="{{ $work_stage->uuid }}"
                                                                {{ in_array($work_stage->uuid, old('jsa_work_stage_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $work_stage->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_work_stage_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="jsa_creator">Dibuat
                                                        Oleh</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('jsa_creator') is-invalid @enderror"
                                                        id="jsa_creator" name="jsa_creator"
                                                        value="{{ old('jsa_creator') }}"
                                                        placeholder="Masukkan Nama Pembuat">
                                                    @error('jsa_creator')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="jsa_creator_position">Jabatan
                                                        Pembuat</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('jsa_creator_position') is-invalid @enderror"
                                                        id="jsa_creator_position" name="jsa_creator_position"
                                                        value="{{ old('jsa_creator_position') }}"
                                                        placeholder="Masukkan Jabatan Pembuat">
                                                    @error('jsa_creator_position')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required" for="jsa_supervisor_k3">Supervisor
                                                        K3</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('jsa_supervisor_k3') is-invalid @enderror"
                                                        id="jsa_supervisor_k3" name="jsa_supervisor_k3"
                                                        value="{{ old('jsa_supervisor_k3') }}"
                                                        placeholder="Masukkan Supervisor K3">
                                                    @error('jsa_supervisor_k3')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-3 col-lg-3">
                                                    <label class="form-label required"
                                                        for="jsa_supervisor_k3_unit">Supervisor
                                                        K3 Unit</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('jsa_supervisor_k3_unit') is-invalid @enderror"
                                                        id="jsa_supervisor_k3_unit" name="jsa_supervisor_k3_unit"
                                                        value="{{ old('jsa_supervisor_k3_unit') }}"
                                                        placeholder="Masukkan Supervisor K3 Unit">
                                                    @error('jsa_supervisor_k3_unit')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row col-lg-12">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="status">Status</label>
                                                    <select class="form-select @error('status') is-invalid @enderror"
                                                        name="status" id="status">
                                                        @php
                                                            $statusses = ['Mulai', 'Ditunda', 'Closed'];
                                                        @endphp
                                                        <option selected disabled>Pilih Status</option>
                                                        @foreach ($statusses as $status)
                                                            <option value="{{ $status }}"
                                                                {{ old('status') == $status ? 'selected' : '' }}>
                                                                {{ $status }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('status')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/jsas" class="btn btn-danger btn-md">Batal</a>
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

    @endsection
