@extends('components.master')
@section('title', 'SASANDO | Users - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            User
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($users) }} Users</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            @role('super_user')
                                <a href="users-create" class="btn btn-primary">
                                    Tambah User <i class="ms-2 fa-solid fa-user-plus"></i>
                                </a>
                            @endrole
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
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($users as $user)
                                            @if (Auth::user()->id == $user->id || Auth::user()->getRoleNames()->contains('super_user'))
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="users-edit/{{ $user->id }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <span class="mx-2">|</span>
                                                            <a href="#"
                                                                onclick="hapus('{{ $user->id }}','users')">
                                                                <i class="fa-solid fa-trash text-danger"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
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
