@extends('components.master')
@section('title', 'SASANDO | Potensi Bahaya - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Potensi Bahaya
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($potential_hazards) }} Potensi Bahaya</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <a href="/work_stages" class="btn btn-danger me-2">
                                <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                            </a>
                            <a href="/potential_hazards-create" class="btn btn-primary">
                                Tambah Potensi Bahaya <i class="ms-2 fa-solid fa-burst"></i>
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
                                            <th>Dampak</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($potential_hazards as $potential_hazard)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $potential_hazard->name }}
                                                </td>
                                                <td>
                                                    @if (count($potential_hazard->jsa_potential_hazard_jsa_impact) > 0)
                                                        <ol>
                                                            @foreach ($potential_hazard->jsa_potential_hazard_jsa_impact as $potential_hazard_jsa_potential_hazard_jsa_impact)
                                                                <li>
                                                                    {{ $potential_hazard_jsa_potential_hazard_jsa_impact->jsa_impact->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif

                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/potential_hazards-edit/{{ $potential_hazard->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $potential_hazard->uuid }}','potential_hazards')">
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
