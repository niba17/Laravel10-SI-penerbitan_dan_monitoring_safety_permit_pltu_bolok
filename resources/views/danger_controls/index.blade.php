@extends('components.master')
@section('title', 'SASANDO | Pengendalian Bahaya - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Pengendalian Bahaya
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($danger_controls) }} Pengendalian Bahaya</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <a href="/work_stages" class="btn btn-danger me-2">
                                <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                            </a>
                            <a href="/danger_controls-create" class="btn btn-primary">
                                Tambah Pengendalian Bahaya <i class="ms-2 fa-solid fa-person-military-to-person"></i>
                            </a>
                        </div>
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
                                        @foreach ($danger_controls as $danger_control)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $danger_control->name }}
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/danger_controls-edit/{{ $danger_control->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $danger_control->uuid }}','danger_controls')">
                                                            <i class="fa-solid fa-trash text-danger"></i>
                                                        </a>
                                                    </div>
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
