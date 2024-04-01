@extends('components.master')
@section('title', 'SASANDO | Metode Isolasi - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Metode Isolasi
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($isolation_methods) }} Metode Isolasi</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <a href="/ptw_descriptions" class="btn btn-danger me-2">
                                <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                            </a>
                            <a href="/isolation_methods-create" class="btn btn-primary">
                                Tambah Metode Isolasi <i class="ms-2 fa-solid fa-unlock"></i>
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
                                        @foreach ($isolation_methods as $pic)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $pic->name }}
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/isolation_methods-edit/{{ $pic->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $pic->uuid }}','isolation_methods')">
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
