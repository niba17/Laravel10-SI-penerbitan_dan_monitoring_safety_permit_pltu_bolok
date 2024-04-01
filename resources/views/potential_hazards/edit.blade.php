@extends('components.master')
@section('title', 'SASANDO | Potensi Bahaya - edit')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Potensi Bahaya
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
                                    <form class="card" method="POST"
                                        action="/potential_hazards-update/{{ $potential_hazard->uuid }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="name">Nama</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name"
                                                        value="{{ old('name') ?? $potential_hazard->name }}"
                                                        placeholder="Masukkan Nama">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label"
                                                        for="multiple-select-field-jsa_impacts">Dampak</label>
                                                    <select
                                                        class="form-select @error('jsa_impact_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-jsa_impacts" name="jsa_impact_uuid[]"
                                                        data-placeholder="Pilih Dampak" multiple>
                                                        @foreach ($impacts as $impact)
                                                            <option class="text-sm" value="{{ $impact->uuid }}"
                                                                {{ in_array($impact->uuid, old('jsa_impact_uuid', [])) || ($potential_hazard && in_array($impact->uuid, $potential_hazard->jsa_potential_hazard_jsa_impact->pluck('jsa_impact_uuid')->toArray())) ? 'selected' : '' }}>
                                                                {{ $impact->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_potential_hazard_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/potential_hazards" class="btn btn-danger btn-md">Batal</a>
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
