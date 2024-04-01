@extends('components.master')
@section('title', 'SASANDO | Person Group - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Person Group
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($person_groups) }} Person Group</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                            <div class="d-flex">
                                <a href="/person_groups-create" class="btn btn-primary">
                                    Tambah Person Group <i class="ms-2 fa-solid fa-person-military-to-person"></i>
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
                                        @foreach ($person_groups as $person_group)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $person_group->name }}
                                                </td>
                                                <td>
                                                    @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                                                        <div class="d-flex">
                                                            <a href="/person_groups-edit/{{ $person_group->uuid }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <span class="mx-2">|</span>
                                                            <a href="#"
                                                                onclick="hapus('{{ $person_group->uuid }}','person_groups')">
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
