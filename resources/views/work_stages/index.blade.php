@extends('components.master')
@section('title', 'SASANDO | Tahapan Kerja - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Tahapan Kerja
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($work_stages) }} Tahapan Kerja</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <a href="/pics" class="btn btn-primary me-2">
                                PIC <i class="ms-2 fa-solid fa-person-military-pointing"></i>
                            </a>
                            <a href="/danger_controls" class="btn btn-primary me-2">
                                Pengendalian Bahaya <i class="ms-2 fa-solid fa-skull-crossbones"></i>
                            </a>
                            <a href="/impacts" class="btn btn-primary me-2">
                                Dampak <i class="ms-2 fa-solid fa-user-injured"></i>
                            </a>
                            <a href="/potential_hazards" class="btn btn-primary me-2">
                                Potensi Bahaya <i class="ms-2 fa-solid fa-circle-radiation"></i>
                            </a>
                            <a href="/work_stages-create" class="btn btn-primary">
                                Tambah Tahapan Kerja <i class="ms-2 fa-solid fa-chart-line"></i>
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
                                            <th width="250px">Nama</th>
                                            <th>Potensi Bahaya</th>
                                            <th>PIC</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($work_stages as $work_stage)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $work_stage->name }}
                                                </td>
                                                <td>
                                                    @if (count($work_stage->jsa_work_stage_jsa_potential_hazard) > 0)
                                                        <ol>
                                                            @foreach ($work_stage->jsa_work_stage_jsa_potential_hazard as $work_stage_jsa_work_stage_jsa_potential_hazard)
                                                                <li>
                                                                    {{ $work_stage_jsa_work_stage_jsa_potential_hazard->jsa_potential_hazard->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($work_stage->jsa_work_stage_jsa_pic) > 0)
                                                        <ol>
                                                            @foreach ($work_stage->jsa_work_stage_jsa_pic as $work_stage_jsa_work_stage_jsa_pic)
                                                                <li>
                                                                    {{ $work_stage_jsa_work_stage_jsa_pic->jsa_pic->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/work_stages-edit/{{ $work_stage->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $work_stage->uuid }}','work_stages')">
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
