@extends('components.master')
@section('title', 'SASANDO | Roles & Users - edit')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Edit Roles & Users
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
                                        action="/roles_and_users-update/{{ $role->id }}">
                                        @csrf
                                        @method('PUT')
                                        {{-- <div class="card-header">
                                                <h3 class="card-title">Basic form</h3>
                                            </div> --}}
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label required" for="role_id">Role</label>
                                                    <input autocomplete="off" type="text"
                                                        class="form-control @error('role_id') is-invalid @enderror"
                                                        id="role_id" value="{{ $role->name }}" disabled>
                                                    @error('role_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <input type="hidden" value="{{ $role->id }}" name="role_id">
                                                <div class="mb-3 col-md-6 col-lg-6">
                                                    <label class="form-label"
                                                        for="multiple-select-field-users">Users</label>
                                                    <select class="form-select @error('user_id') is-invalid @enderror"
                                                        id="multiple-select-field-users" name="user_id[]"
                                                        data-placeholder="Pilih Users" multiple>
                                                        @foreach ($users as $user)
                                                            <option class="text-sm" value="{{ $user->id }}"
                                                                {{ in_array($user->id, old('user_id', $role->users->pluck('id')->toArray() ?? [])) ? 'selected' : '' }}>
                                                                {{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('user_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>
                                        <div class="card-footer text-start">
                                            <a href="/roles_and_users" class="btn btn-danger btn-md">Batal</a>
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
