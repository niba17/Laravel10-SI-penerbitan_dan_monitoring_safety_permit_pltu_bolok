@extends('components.master')
@section('title', 'SASANDO | JSA - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Job Safety Analysis
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($jsas) }} JSA</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                            <div class="d-flex">
                                <a href="/jsas-create" class="btn btn-primary">
                                    Buat JSA <i class="ms-2 fa-solid fa-file-circle-plus"></i>
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
                            <div class="card-header">
                                <h3 class="card-title">Data Non Relational</h3>
                            </div>
                            <div class="table-responsive m-2">
                                <table class="table table-vcenter card-table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="w-5">Pekerjaan</th>
                                            <th>WO</th>
                                            <th>Lokasi</th>
                                            <th>tgl / wkt</th>
                                            <th>Pembuat</th>
                                            <th>Jabatan Pembuat</th>
                                            <th>SPV K3</th>
                                            <th>SPV K3 Unit</th>
                                            <th>Status</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jsas as $jsa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $jsa->name }}
                                                </td>
                                                <td>
                                                    {{ $jsa->job_base ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->location ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ ($jsa->start_date ?? '-') . ' sd ' . ($jsa->finish_date ?? ' - ') . ' / ' . ($jsa->start_time ?? '-') . ' sd ' . ($jsa->finish_time ?? '-') }}
                                                </td>
                                                <td>
                                                    {{ $jsa->jsa_creator ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->jsa_creator_position ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->jsa_supervisor_k3 ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->jsa_supervisor_k3_unit ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->status ?? '-' }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a target="_blank" href="/jsas-print/{{ $jsa->uuid }}">
                                                            <i class="fa-solid fa-file-lines" style="color:#f2af07;"></i>
                                                        </a>
                                                    </div>
                                                    @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                                                        <hr class="p-0 my-1 text-dark">
                                                        <div class="d-flex">

                                                            <a href="/jsas-edit/{{ $jsa->uuid }}">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>

                                                            <span class="mx-2">|</span>
                                                            <a href="#" onclick="hapus('{{ $jsa->uuid }}','jsas')">
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
            <div class="container-xl mt-2">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Relational</h3>
                            </div>
                            <div class="table-responsive m-2">
                                <table class="table table-vcenter card-table table-striped" id="myTable2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="w-5">Pekerjaan</th>
                                            <th>Pelaksana</th>
                                            <th>Safety Permits</th>
                                            <th>Pekerja</th>
                                            <th>Tools Kerja</th>
                                            <th>Tahapan Kerja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jsas as $jsa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $jsa->name }}
                                                </td>
                                                <td>
                                                    {{ $jsa->jsa_person_group->name ?? '-' }}
                                                </td>
                                                <td>
                                                    @if (count($jsa->jsa_jsa_safety_permit) > 0)
                                                        <ol>
                                                            @foreach ($jsa->jsa_jsa_safety_permit as $jsa_jsa_jsa_safety_permit)
                                                                <li>
                                                                    {{ $jsa_jsa_jsa_safety_permit->jsa_safety_permit->name ?? '' }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($jsa->jsa_jsa_worker) > 0)
                                                        <ol>
                                                            @foreach ($jsa->jsa_jsa_worker as $jsa_jsa_jsa_worker)
                                                                <li>
                                                                    {{ $jsa_jsa_jsa_worker->jsa_worker->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                        @else{{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($jsa->jsa_jsa_work_tool) > 0)
                                                        <ol>
                                                            @foreach ($jsa->jsa_jsa_work_tool as $jsa_jsa_jsa_work_tool)
                                                                <li>
                                                                    {{ $jsa_jsa_jsa_work_tool->jsa_work_tool->name ?? '' }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($jsa->jsa_jsa_work_stage) > 0)
                                                        <ol>
                                                            @foreach ($jsa->jsa_jsa_work_stage as $jsa_jsa_jsa_work_stage)
                                                                <li>
                                                                    {{ $jsa_jsa_jsa_work_stage->jsa_work_stage->name ?? '' }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
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
