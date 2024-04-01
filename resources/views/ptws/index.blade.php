@extends('components.master')
@section('title', 'SASANDO | PTW - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Permit To Work
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($ptws) }} PTW</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        @role('super_user|spv_k3|staff_k3|spv_produksi')
                            <div class="d-flex">
                                <a href="/ptws-create" class="btn btn-primary">
                                    Buat PTW <i class="ms-2 fa-solid fa-wand-magic"></i>
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
                                            <th>Nomer</th>
                                            <th>Lokasi</th>
                                            <th>KKS Equipment Number</th>
                                            <th>Pekerjaan</th>
                                            <th>Durasi</th>
                                            <th>Bidang / Perusahaan</th>
                                            <th>Working Party</th>
                                            <th>Status</th>
                                            <th>Certificate</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ptws as $ptw)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $ptw->ptw_number }}
                                                </td>
                                                <td>
                                                    {{ $ptw->location ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->kks_equipment_number ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->job_name ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->job_duration ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->field_or_company ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->working_party ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->work_status ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $ptw->certificate ?? '-' }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a target="_blank" href="/ptws-print/{{ $ptw->uuid }}"><i
                                                                class="fa-solid fa-file-lines"
                                                                style="color:#f2af07;"></i></a>
                                                    </div>
                                                    @role('super_user|spv_k3|staff_k3|spv_produksi')
                                                        <hr class="p-0 my-1 text-dark">
                                                        <div class="d-flex">
                                                            <a href="/ptws-edit/{{ $ptw->uuid }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <span class="mx-2">|</span>
                                                            <a href="#" onclick="hapus('{{ $ptw->uuid }}','ptws')">
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
                                            <th>Nomer</th>
                                            <th>Pekerjaan</th>
                                            <th>Deskripsi</th>
                                            <th>Catatan Tambahan</th>
                                            <th>Precaution & Hazard</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ptws as $ptw)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ptw->ptw_number }}</td>
                                                <td>{{ $ptw->job_name }}</td>
                                                <td>
                                                    @if (count($ptw->ptw_ptw_description) > 0)
                                                        <ol>
                                                            @foreach ($ptw->ptw_ptw_description as $ptw_ptw_description)
                                                                <li>
                                                                    {{ $ptw_ptw_description->ptw_description->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($ptw->ptw_ptw_note) > 0)
                                                        <ol>
                                                            @foreach ($ptw->ptw_ptw_note as $ptw_ptw_ptw_note)
                                                                <li>
                                                                    {{ $ptw_ptw_ptw_note->ptw_note->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($ptw->ptw_jsa_safety_permit) > 0)
                                                        <ol>
                                                            @foreach ($ptw->ptw_jsa_safety_permit as $ptw_ptw_jsa_safety_permit)
                                                                <li>
                                                                    {{ $ptw_ptw_jsa_safety_permit->jsa_safety_permit->name }}
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
