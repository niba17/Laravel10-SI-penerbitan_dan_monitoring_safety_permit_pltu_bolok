@extends('components.master')
@section('title', 'SASANDO | Skill / Position - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Skill / Position
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($skills_or_positions) }} Skills / Positions</div>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            {{-- <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search user…"> --}}
                            <a href="/workers" class="btn btn-danger me-2">
                                <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                            </a>
                            <a href="/skills_or_positions-create" class="btn btn-primary">
                                Tambah Skill / Position <i class="ms-2 fa-solid fa-people-robbery"></i>

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
                                        @foreach ($skills_or_positions as $skill_or_position)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-muted">
                                                    {{ $skill_or_position->name }}
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/skills_or_positions-edit/{{ $skill_or_position->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $skill_or_position->uuid }}','skills_or_positions')">
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
