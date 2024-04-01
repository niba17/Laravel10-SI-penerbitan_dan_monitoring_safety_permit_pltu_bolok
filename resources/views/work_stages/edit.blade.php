@extends('components.master')
@section('title', 'SASANDO | Tahapan Kerja - edit')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Tahapan Kerja
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

                        {{-- <div class="card-header">
                                <h4 class="card-title">Form elements</h4>
                            </div> --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="card" method="POST"
                                        action="/work_stages-update/{{ $work_stage->uuid }}">
                                        @csrf
                                        @method('PUT')
                                        {{-- <div class="card-header">
                                                <h3 class="card-title">Basic form</h3>
                                            </div> --}}
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="name">Nama</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name"
                                                        value="{{ old('name') ?? $work_stage->name }}"
                                                        placeholder="Masukkan Nama">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label"
                                                        for="multiple-select-field-jsa_potential_hazards">Potensi
                                                        Bahaya</label>
                                                    <select
                                                        class="form-select @error('jsa_potential_hazard_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-jsa_potential_hazards"
                                                        name="jsa_potential_hazard_uuid[]"
                                                        data-placeholder="Pilih Potensi Bahaya" multiple>
                                                        @foreach ($potential_hazards as $potential_hazard)
                                                            <option class="text-sm" value="{{ $potential_hazard->uuid }}"
                                                                {{ in_array($potential_hazard->uuid, old('jsa_potential_hazard_uuid', $work_stage->jsa_work_stage_jsa_potential_hazard->pluck('jsa_potential_hazard_uuid')->toArray() ?? [])) ? 'selected' : '' }}>
                                                                {{ $potential_hazard->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_potential_hazard_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label"
                                                        for="multiple-select-field-jsa_pics">PIC</label>
                                                    <select class="form-select @error('jsa_pic_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-jsa_pics" name="jsa_pic_uuid[]"
                                                        data-placeholder="Pilih PIC" multiple>
                                                        @foreach ($pics as $pic)
                                                            <option class="text-sm" value="{{ $pic->uuid }}"
                                                                {{ in_array($pic->uuid, old('jsa_pic_uuid', $work_stage->jsa_work_stage_jsa_pic->pluck('jsa_pic_uuid')->toArray() ?? [])) ? 'selected' : '' }}>
                                                                {{ $pic->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_pic_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/work_stages" class="btn btn-danger btn-md">Batal</a>
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
