@extends('components.master')
@section('title', 'SASANDO | Dampak - edit')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Dampak
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
                                    <form class="card" method="POST" action="/impacts-update/{{ $impact->uuid }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="name">Nama</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name"
                                                        value="{{ old('name') ?? $impact->name }}"
                                                        placeholder="Masukkan Nama">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label"
                                                        for="multiple-select-field-jsa_danger_controls">Pengendalian
                                                        Bahaya</label>
                                                    <select
                                                        class="form-select @error('jsa_danger_control_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-jsa_danger_controls"
                                                        name="jsa_danger_control_uuid[]"
                                                        data-placeholder="Pilih Pengendalian Bahaya" multiple>
                                                        @foreach ($danger_controls as $danger_control)
                                                            <option class="text-sm" value="{{ $danger_control->uuid }}"
                                                                {{ in_array($danger_control->uuid, old('jsa_danger_control_uuid', [])) || ($impact && in_array($danger_control->uuid, $impact->jsa_impact_jsa_danger_control->pluck('jsa_danger_control_uuid')->toArray())) ? 'selected' : '' }}>
                                                                {{ $danger_control->name }}
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
                                            <a href="/impacts" class="btn btn-danger btn-md">Batal</a>
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
