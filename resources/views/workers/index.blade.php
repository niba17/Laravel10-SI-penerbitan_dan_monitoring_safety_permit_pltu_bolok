@extends('components.master')
@section('title', 'SASANDO | Pekerja - index')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Pekerja
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($workers) }} Pekerja</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                            <div class="d-flex">
                                <a href="/skills_or_positions" class="btn btn-primary me-2">
                                    Skills / Positions <i class="ms-2 fa-solid fa-person-rays"></i>

                                </a>
                                <a href="/workers-create" class="btn btn-primary">
                                    Tambah Pekerja <i class="ms-2 fa-solid fa-person-circle-plus"></i>

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
                                            <th>Skills / Positions</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($workers as $worker)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $worker->name }}
                                                </td>
                                                <td>
                                                    @if (count($worker->jsa_worker_jsa_skill_or_position) > 0)
                                                        <ol>
                                                            @foreach ($worker->jsa_worker_jsa_skill_or_position as $worker_jsa_skill_or_position)
                                                                <li>
                                                                    {{ $worker_jsa_skill_or_position->jsa_skill_or_position->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                                                        <div class="d-flex">
                                                            <a href="/workers-edit/{{ $worker->uuid }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <span class="mx-2">|</span>
                                                            <a href="#" onclick="hapus('{{ $worker->uuid }}','workers')">
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
