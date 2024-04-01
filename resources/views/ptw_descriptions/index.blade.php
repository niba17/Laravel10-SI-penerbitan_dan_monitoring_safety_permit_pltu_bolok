@extends('components.master')
@section('title', 'SASANDO | Deskripsi - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Deskripsi
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($ptw_descriptions) }} Deskripsi</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                            <a href="/isolation_methods" class="btn btn-primary me-2">
                                Metode Isolasi <i class="ms-2 fa-solid fa-road-barrier"></i>
                            </a>
                            <a href="/ptw_descriptions-create" class="btn btn-primary">
                                Tambah Deskripsi <i class="ms-2 fa-solid fa-circle-exclamation"></i>
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
                                            <th>Metode Isolasi</th>
                                            <th>Isolasi Oleh</th>
                                            <th>Signature Date</th>
                                            <th>Area</th>
                                            <th>Restorasi Oleh</th>
                                            <th>Signature Date</th>
                                            <th>PMT Oleh</th>
                                            <th>Signature Date</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ptw_descriptions as $description)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $description->name }}
                                                </td>
                                                <td>
                                                    @if (count($description->ptw_description_ptw_isolation_method) > 0)
                                                        <ol>
                                                            @foreach ($description->ptw_description_ptw_isolation_method as $description_ptw_description_ptw_isolation_method)
                                                                <li>
                                                                    {{ $description_ptw_description_ptw_isolation_method->ptw_isolation_method->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $description->isolation_by ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $description->isolation_signature_date ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $description->area ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $description->restoration_by ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $description->restoration_signature_date ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $description->pmt_by ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $description->pmt_signature_date ?? '-' }}
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/ptw_descriptions-edit/{{ $description->uuid }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <span class="mx-2">|</span>
                                                        <a href="#"
                                                            onclick="hapus('{{ $description->uuid }}','ptw_descriptions')">
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
