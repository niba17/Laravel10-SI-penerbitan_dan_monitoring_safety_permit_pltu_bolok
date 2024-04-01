@extends('components.master')
@section('title', 'SASANDO | Safety Permit - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Safety Permit
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($safety_permits) }} Safety Permits</div>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                            <div class="d-flex">
                                <a href="/safety_permits-create" class="btn btn-primary">
                                    Buat Safety Permit <i class="ms-2 fa-solid fa-file-circle-plus"></i>
                                </a>
                            </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive m-2">
                                <table class="table table-vcenter card-table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($safety_permits as $safety_permit)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $safety_permit->name }}
                                                </td>
                                                <td>
                                                    @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                                                        <div class="d-flex">
                                                            <a href="/safety_permits-edit/{{ $safety_permit->uuid }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <span class="mx-2">|</span>
                                                            <a href="#"
                                                                onclick="hapus('{{ $safety_permit->uuid }}','safety_permits')">
                                                                <i class="fa-solid fa-trash text-danger"></i>
                                                            </a>
                                                        </div>
                                                    @endrole
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
