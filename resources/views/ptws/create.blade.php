@extends('components.master')
@section('title', 'SASANDO | PTW - create')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Tambah PTW
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
                                    <form class="card" method="POST" action="/ptws-store">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="ptw_number">Nomer PTW</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('ptw_number') is-invalid @enderror"
                                                        id="ptw_number" name="ptw_number" value="{{ old('ptw_number') }}"
                                                        placeholder="Masukkan Nomer PTW">
                                                    @error('ptw_number')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="location">Lokasi / Work
                                                        Area</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('location') is-invalid @enderror"
                                                        id="location" name="location" value="{{ old('location') }}"
                                                        placeholder="Masukkan Lokasi / Work Area">
                                                    @error('location')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label" for="kks_equipment_number">KKS
                                                        Equipment
                                                        Number</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('kks_equipment_number') is-invalid @enderror"
                                                        id="kks_equipment_number" name="kks_equipment_number"
                                                        value="{{ old('kks_equipment_number') }}"
                                                        placeholder="Masukkan KKS Equipment Number">
                                                    @error('kks_equipment_number')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="job_name">Nama Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('job_name') is-invalid @enderror"
                                                        id="job_name" name="job_name" value="{{ old('job_name') }}"
                                                        placeholder="Masukkan Nama Pekerjaan">
                                                    @error('job_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="job_duration">Durasi
                                                        Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('job_duration') is-invalid @enderror"
                                                        id="job_duration" name="job_duration"
                                                        value="{{ old('job_duration') }}"
                                                        placeholder="Masukkan Durasi Pekerjaan">
                                                    @error('job_duration')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="field_or_company">Bidang /
                                                        Pekerjaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('field_or_company') is-invalid @enderror"
                                                        id="field_or_company" name="field_or_company"
                                                        value="{{ old('field_or_company') }}"
                                                        placeholder="Masukkan Bidang / Pekerjaan">
                                                    @error('field_or_company')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="working_party">Working
                                                        Party</label>
                                                    <select class="form-select @error('working_party') is-invalid @enderror"
                                                        name="working_party" id="person_group_uuid">
                                                        <option selected disabled>Pilih Working
                                                            Party</option>
                                                        <option value="Yes"
                                                            {{ old('working_party') == 'Yes' ? 'selected' : '' }}>Yes
                                                        </option>
                                                        <option value="No"
                                                            {{ old('working_party') == 'No' ? 'selected' : '' }}>No
                                                        </option>
                                                    </select>
                                                    @error('working_party')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="work_status">Work
                                                        Status</label>
                                                    <select class="form-select @error('work_status') is-invalid @enderror"
                                                        name="work_status" id="work_status">
                                                        <option selected disabled>Pilih Work
                                                            Status</option>
                                                        <option value="1"
                                                            {{ old('work_status') == 'Online' ? 'selected' : '' }}>Online
                                                        </option>
                                                        <option value="Offline"
                                                            {{ old('work_status') == 'Offline' ? 'selected' : '' }}>Offline
                                                        </option>
                                                    </select>
                                                    @error('work_status')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required"
                                                        for="certificate">Sertifikat</label>
                                                    <select id="certificate" name="certificate"
                                                        class="form-select @error('certificate') is-invalid @enderror">
                                                        <option value="" selected disabled>Pilih Sertifikat</option>
                                                        </option>
                                                        @php
                                                        $certs = ['Access Certificate', 'PTW Certificate']; @endphp
                                                        @foreach ($certs as $cert)
                                                            <option value="{{ $cert }}"
                                                                {{ old('certificate') == $cert ? 'selected' : '' }}>
                                                                {{ $cert }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('certificate')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label"
                                                        for="multiple-select-field-ptw_descriptions">Deskripsi</label>
                                                    <select
                                                        class="form-select @error('ptw_description_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-ptw_descriptions"
                                                        name="ptw_description_uuid[]" data-placeholder="Pilih Deskripsi"
                                                        multiple @if (!old('certificate') || old('certificate') == 'Acces Certificate') disabled @endif>
                                                        @foreach ($descriptions as $description)
                                                            <option class="text-sm" value="{{ $description->uuid }}"
                                                                {{ in_array($description->uuid, old('ptw_description_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $description->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <small id="certInfo" class="text-danger">
                                                        Pilih Sertifikat terlebih dahulu!
                                                    </small>
                                                    @error('ptw_description_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label"
                                                        for="multiple-select-field-ptw_notes">Catatan Tambahan</label>
                                                    <select
                                                        class="form-select @error('ptw_note_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-ptw_notes" name="ptw_note_uuid[]"
                                                        data-placeholder="Pilih Catatan Tambahan" multiple>
                                                        @foreach ($notes as $note)
                                                            <option class="text-sm" value="{{ $note->uuid }}"
                                                                {{ in_array($note->uuid, old('ptw_note_uuid', [])) ? 'selected' : '' }}>
                                                                {{ $note->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('ptw_note_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-12 col-lg-12">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-safety_permits">Precaution &
                                                        Hazard</label>
                                                    <select
                                                        class="form-select @error('jsa_safety_permit_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-safety_permits"
                                                        name="jsa_safety_permit_uuid[]"
                                                        data-placeholder="Pilih Precaution & Hazard" multiple>
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
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="knowing">Mengetahui</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('knowing') is-invalid @enderror"
                                                        id="knowing" name="knowing" value="{{ old('knowing') }}"
                                                        placeholder="Masukkan Mengetahui">
                                                    @error('knowing')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="knowing_position">Jabatan
                                                        Mengetahui</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('knowing_position') is-invalid @enderror"
                                                        id="knowing_position" name="knowing_position"
                                                        value="{{ old('knowing_position') }}"
                                                        placeholder="Masukkan Jabatan Mengetahui">
                                                    @error('knowing_position')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required"
                                                        for="approve_start_ptw_officer">Approve
                                                        Start PTW Officer</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('approve_start_ptw_officer') is-invalid @enderror"
                                                        id="approve_start_ptw_officer" name="approve_start_ptw_officer"
                                                        value="{{ old('approve_start_ptw_officer') }}"
                                                        placeholder="Masukkan Approve Start PTW Officer">
                                                    @error('approve_start_ptw_officer')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required"
                                                        for="approve_start_maintenance_supervisor">Approve Start Supervisor
                                                        Pemeliharaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('approve_start_maintenance_supervisor') is-invalid @enderror"
                                                        id="approve_start_maintenance_supervisor"
                                                        name="approve_start_maintenance_supervisor"
                                                        value="{{ old('approve_start_maintenance_supervisor') }}"
                                                        placeholder="Masukkan Approve Start Supervisor Pemeliharaan">
                                                    @error('approve_start_maintenance_supervisor')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="myDatePickerDateStart">Tanggal
                                                        Approve Start</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('approve_start_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart"
                                                            name="approve_start_date"
                                                            placeholder="Masukkan Tanggal Approve Start"
                                                            value="{{ old('approve_start_date') }}">
                                                        @error('approve_start_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required" for="myDatePickerTimeStart">Waktu
                                                        Approve Start</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('approve_start_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeStart"
                                                            name="approve_start_time"
                                                            placeholder="Masukkan Tanggal Approve Start"
                                                            value="{{ old('approve_start_time') }}">
                                                        @error('approve_start_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required"
                                                        for="clearance_ptw_officer">Clearance
                                                        PTW Officer</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('clearance_ptw_officer') is-invalid @enderror"
                                                        id="clearance_ptw_officer" name="clearance_ptw_officer"
                                                        value="{{ old('clearance_ptw_officer') }}"
                                                        placeholder="Masukkan Approve Start PTW Officer">
                                                    @error('clearance_ptw_officer')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label required"
                                                        for="clearance_maintenance_supervisor">Clearance Supervisor
                                                        Pemeliharaan</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('clearance_maintenance_supervisor') is-invalid @enderror"
                                                        id="clearance_maintenance_supervisor"
                                                        name="clearance_maintenance_supervisor"
                                                        value="{{ old('clearance_maintenance_supervisor') }}"
                                                        placeholder="Masukkan Approve Start Supervisor Pemeliharaan">
                                                    @error('clearance_maintenance_supervisor')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label" for="third_party_person">Orang
                                                        Pihak Ketiga</label>
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
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label" for="myDatePickerDateStart">Tanggal
                                                        Pihak Ketiga</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('third_party_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart"
                                                            name="third_party_date"
                                                            placeholder="Masukkan Tanggal Pihak Ketiga"
                                                            value="{{ old('third_party_date') }}">
                                                        @error('third_party_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-4 col-lg-4">
                                                    <label class="form-label" for="myDatePickerTimeStart">Waktu
                                                        Pihak Ketiga</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('third_party_time') is-invalid @enderror"
                                                            type="text" id="myDatePickerTimeStart"
                                                            name="third_party_time"
                                                            placeholder="Masukkan Tanggal Pihak Ketiga"
                                                            value="{{ old('third_party_time') }}">
                                                        @error('third_party_time')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/ptws" class="btn btn-danger btn-md">Batal</a>
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
            var temp = `{{ old('certificate') }}`

            if (!temp.length) {

                $('#certificate').change(function() {
                    var selectedCertificate = $(this).val();

                    if (selectedCertificate == 'Access Certificate') {
                        $('#multiple-select-field-ptw_descriptions').attr('disabled', '').attr('value', '');
                        $('#certInfo').html(`Deskripsi tidak dapat dipilih jika Sertifikat terpilih adalah 'Access
                                                        Certificate'!`).removeClass('text-success').addClass(
                            'text-danger');

                        getDescription()
                    } else {
                        $('#multiple-select-field-ptw_descriptions').removeAttr('disabled')
                        $('#certInfo').html(`Deskripsi dapat dipilih jika Sertifikat terpilih adalah 'PTW
                                                        Certificate'`).removeClass('text-danger').addClass(
                            'text-success');
                    }
                });
            } else {
                if (temp == 'Access Certificate') {
                    $('#multiple-select-field-ptw_descriptions').attr('disabled', '').attr('value', '');
                    $('#certInfo').html(`Deskripsi tidak dapat dipilih jika Sertifikat terpilih adalah 'Access
                                                        Certificate'!`).removeClass('text-success').addClass(
                        'text-danger');

                    getDescription()
                } else {
                    $('#multiple-select-field-ptw_descriptions').removeAttr('disabled');
                    $('#certInfo').html(`Deskripsi dapat dipilih jika Sertifikat terpilih adalah 'PTW
                                                        Certificate'`).removeClass('text-danger').addClass(
                        'text-success');
                }
            }

            function getDescription() {
                $.ajax({
                    url: "{{ route('ptw_descriptions-request') }}",
                    method: 'GET',
                    cache: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)
                        var html = "";
                        data[0].forEach(descriptions => {
                            html += '<option class="text-sm" value="' +
                                descriptions.uuid + '">' +
                                descriptions.name +
                                '</option>';
                        });
                        $("#multiple-select-field-ptw_descriptions").html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        </script>

    @endsection
