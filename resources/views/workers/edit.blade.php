@extends('components.master')
@section('title', 'SASANDO | Pekerja - edit')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Pekerja
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
                                    <form class="card" method="POST" action="/workers-update/{{ $worker->uuid }}">
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
                                                        value="{{ old('name') ?? $worker->name }}"
                                                        placeholder="Masukkan Nama">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-jsa_skills_or_positions">Skills /
                                                        Positions</label>
                                                    <select
                                                        class="form-select @error('jsa_skill_or_position_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-jsa_skills_or_positions"
                                                        name="jsa_skill_or_position_uuid[]"
                                                        data-placeholder="Pilih Skill / Position" multiple>
                                                        @foreach ($jsa_skills_or_positions as $jsa_skill_or_position)
                                                            <option class="text-sm"
                                                                value="{{ $jsa_skill_or_position->uuid }}"
                                                                {{ in_array($jsa_skill_or_position->uuid, old('jsa_skill_or_position_uuid', [])) || ($worker && in_array($jsa_skill_or_position->uuid, $worker->jsa_worker_jsa_skill_or_position->pluck('jsa_skill_or_position_uuid')->toArray())) ? 'selected' : '' }}>
                                                                {{ $jsa_skill_or_position->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('jsa_skill_or_position_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/workers" class="btn btn-danger btn-md">Batal</a>
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
