@extends('components.master')
@section('title', 'SASANDO | Deskripsi - edit')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Deskripsi
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
                                        action="/ptw_descriptions-update/{{ $ptw_description->uuid }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="name">Nama</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" name="name"
                                                        value="{{ old('name') ?? $ptw_description->name }}"
                                                        placeholder="Masukkan Nama">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required"
                                                        for="multiple-select-field-isolation_methods">Metode
                                                        Isolasi</label>
                                                    <select
                                                        class="form-select @error('ptw_isolation_method_uuid') is-invalid @enderror"
                                                        id="multiple-select-field-isolation_methods"
                                                        name="ptw_isolation_method_uuid[]"
                                                        data-placeholder="Pilih Metode Isolasi" multiple>
                                                        @foreach ($isolation_methods as $isolation_method)
                                                            <option class="text-sm" value="{{ $isolation_method->uuid }}"
                                                                {{ in_array($isolation_method->uuid, old('ptw_isolation_method_uuid', $ptw_description->ptw_description_ptw_isolation_method->pluck('ptw_isolation_method_uuid')->toArray() ?? [])) ? 'selected' : '' }}>
                                                                {{ $isolation_method->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('ptw_isolation_method_uuid')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="isolation_by">Isolasi
                                                        Oleh</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('isolation_by') is-invalid @enderror"
                                                        id="isolation_by" name="isolation_by"
                                                        value="{{ old('isolation_by') ?? $ptw_description->isolation_by }}"
                                                        placeholder="Masukkan Isolasi Oleh">
                                                    @error('isolation_by')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="myDatePickerDateStart">Isolasi
                                                        Signature Date</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('isolation_signature_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart"
                                                            name="isolation_signature_date"
                                                            placeholder="Masukkan Isolasi Signature Date"
                                                            value="{{ old('isolation_signature_date') ?? $ptw_description->isolation_signature_date }}">
                                                        @error('isolation_signature_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label" for="area">Area</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('area') is-invalid @enderror"
                                                        id="area" name="area"
                                                        value="{{ old('area') ?? $ptw_description->area }}"
                                                        placeholder="Masukkan Area">
                                                    @error('area')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label" for="restoration_by">Restorasi
                                                        Oleh</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('restoration_by') is-invalid @enderror"
                                                        id="restoration_by" name="restoration_by"
                                                        value="{{ old('restoration_by') ?? $ptw_description->restoration_by }}"
                                                        placeholder="Masukkan Restorasi Oleh">
                                                    @error('restoration_by')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label" for="myDatePickerDateStart">Restorasi
                                                        Signature Date</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('restoration_signature_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart"
                                                            name="restoration_signature_date"
                                                            placeholder="Masukkan Restorasi Signature Date"
                                                            value="{{ old('restoration_signature_date') ?? $ptw_description->restoration_signature_date }}">
                                                        @error('restoration_signature_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label" for="pmt_by">PMT
                                                    </label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('pmt_by') is-invalid @enderror"
                                                        id="pmt_by" name="pmt_by"
                                                        value="{{ old('pmt_by') ?? $ptw_description->pmt_by }}"
                                                        placeholder="Masukkan PMT">
                                                    @error('pmt_by')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label" for="myDatePickerDateStart">PMT
                                                        Signature Date</label>
                                                    <div class="input-icon">
                                                        <input
                                                            class="form-control @error('pmt_signature_date') is-invalid @enderror"
                                                            type="text" id="myDatePickerDateStart"
                                                            name="pmt_signature_date"
                                                            placeholder="Masukkan PMT Signature Date"
                                                            value="{{ old('pmt_signature_date') ?? $ptw_description->pmt_signature_date }}">
                                                        @error('pmt_signature_date')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/ptw_descriptions" class="btn btn-danger btn-md">Batal</a>
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
