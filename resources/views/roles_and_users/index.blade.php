@extends('components.master')
@section('title', 'SASANDO | Roles & Users - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Roles & Users
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($roles_and_users) }} Roles & Users
                        </div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            {{-- <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search user…"> --}}
                            {{-- <a href="/roles_and_users-create" class="btn btn-primary">
                                Tambah Roles & Users <i class="ms-2 fa-solid fa-gavel"></i>
                            </a> --}}
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
                                            <th>Users</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles_and_users as $role_and_user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $role_and_user->name }}
                                                </td>
                                                <td>
                                                    <ol>
                                                        @foreach ($role_and_user->users as $role_and_user_users)
                                                            <li>
                                                                {{ $role_and_user_users->name }}
                                                            </li>
                                                        @endforeach
                                                    </ol>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/roles_and_users-edit/{{ $role_and_user->id }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        {{-- <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $role_and_user->uuid }}','roles_and_users')">
                                                            <i class="fa-solid fa-trash text-danger"></i>
                                                        </a> --}}
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
