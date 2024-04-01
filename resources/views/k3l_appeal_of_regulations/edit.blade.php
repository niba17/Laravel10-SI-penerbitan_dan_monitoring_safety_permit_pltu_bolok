@extends('components.master')
@section('title', 'SASANDO | Himbauan Ketentuan K3L - edit')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Himbauan Ketentuan K3L
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
                                        action="/k3l_appeal_of_regulations-update/{{ $k3l_appeal_of_regulations->uuid }}">
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
                                                        value="{{ old('name') ?? $k3l_appeal_of_regulations->name }}"
                                                        placeholder="Masukkan Nama">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/k3l_appeal_of_regulations" class="btn btn-danger btn-md">Batal</a>
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