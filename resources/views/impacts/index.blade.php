@extends('components.master')
@section('title', 'SASANDO | Dampak - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Dampak
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($impacts) }} Dampak</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <a href="/work_stages" class="btn btn-danger me-2">
                                <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                            </a>
                            <a href="/impacts-create" class="btn btn-primary">
                                Tambah Dampak <i class="ms-2 fa-solid fa-explosion"></i>
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
                                            <th>Pengendalian Bahaya</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($impacts as $impact)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $impact->name }}
                                                </td>
                                                <td>
                                                    @if (count($impact->jsa_impact_jsa_danger_control) > 0)
                                                        <ol>
                                                            @foreach ($impact->jsa_impact_jsa_danger_control as $impact_jsa_impact_jsa_danger_control)
                                                                <li>
                                                                    {{ $impact_jsa_impact_jsa_danger_control->jsa_danger_control->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif

                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/impacts-edit/{{ $impact->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#" onclick="hapus('{{ $impact->uuid }}','impacts')">
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
        <style>
            .table tbody td {
                font-size: 12px;
                /* Adjust the font size as needed */
            }

            .table {
                border-collapse: collapse;
                width: 100%;
            }

            .table th,
            .table td {
                padding: 5px;
                /* Adjust padding as needed */
            }
        </style>

    @endsection
