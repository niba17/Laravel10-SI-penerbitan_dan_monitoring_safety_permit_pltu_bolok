@extends('components.master')
@section('title', 'SASANDO | Safety Permit - index')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Safety Permit
                        </h2>
                        <div class="text-muted mt-1">Total {{ count($forms) }} Safety Permits</div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        @role('super_user|spv_k3|staff_k3')
                            <div class="d-flex">
                                <a href="forms-create" class="btn btn-primary">
                                    Buat Safety Permit <i class="ms-2 fa-solid fa-file-circle-plus"></i>
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
                                            <th>WO</th>
                                            <th>Melaksanakan Pekerjaan </th>
                                            <th>Lokasi</th>
                                            <th>Perusahaan / Bidang</th>
                                            <th>Tgl / Wkt (Pekerjaan)</th>
                                            <th>Tgl / Wkt (Ditunda)</th>
                                            <th>Sebab Ditunda</th>
                                            <th>Status</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forms as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $form->job_base_number ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $form->to_carry_out_work ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $form->unit_territory ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $form->company_or_field ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ ($form->start_date ?? '-') . ' sd ' . ($form->finish_date ?? ' - ') . ' / ' . ($form->start_time ?? '-') . ' sd ' . ($form->finish_time ?? '-') }}
                                                </td>
                                                <td>
                                                    {{ ($form->delay_start_date ?? '-') . ' sd ' . ($form->delay_finish_date ?? ' - ') . ' / ' . ($form->delay_start_time ?? '-') . ' sd ' . ($form->delay_finish_time ?? '-') }}
                                                </td>
                                                <td>
                                                    {{ $form->delay_excuse ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $form->jsa->status ?? '-' }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a target="_blank" href="/forms-print/{{ $form->uuid }}">
                                                            <i class="fa-solid fa-file-lines" style="color:#f2af07;"></i>
                                                        </a>
                                                    </div>
                                                    @role('super_user|spv_k3|staff_k3')
                                                        <hr class="p-0 my-1 text-dark">
                                                        <div class="d-flex">
                                                            <a href="/forms-edit/{{ $form->uuid }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <span class="mx-2">|</span>
                                                            <a href="#" onclick="hapus('{{ $form->uuid }}','forms')">
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
                <div class="row row-deck row-cards mt-2">
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
                                            <th>WO</th>
                                            <th>JSA</th>
                                            <th>Permit</th>
                                            <th>Diminta</th>
                                            <th>Deskripsi</th>
                                            <th>Alat Pelindung Diri</th>
                                            <th>Catatan Tambahan</th>
                                            <th>Pekerja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forms as $form)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $form->job_base_number }}
                                                </td>
                                                <td>
                                                    {{ ($form->jsa->name ?? '-') . ' ( ' . $form->jsa->job_base . ' )' }}
                                                </td>
                                                <td>
                                                    {{ $form->jsa_safety_permit->name }}
                                                </td>
                                                <td>
                                                    {{ $form->jsa_person_group->name ?? '-' }}
                                                </td>
                                                <td>
                                                    @if (count($form->form_form_description) > 0)
                                                        <ol>
                                                            @foreach ($form->form_form_description as $form_form_form_description)
                                                                <li>
                                                                    {{ $form_form_form_description->form_description->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($form->form_form_protective_equipment) > 0)
                                                        <ol>
                                                            @foreach ($form->form_form_protective_equipment as $form_form_form_protective_equipment)
                                                                <li>
                                                                    {{ $form_form_form_protective_equipment->form_protective_equipment->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($form->form_form_additional_note) > 0)
                                                        <ol>
                                                            @foreach ($form->form_form_additional_note as $form_form_form_additional_note)
                                                                <li>
                                                                    {{ $form_form_form_additional_note->form_additional_note->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (count($form->form_jsa_worker) > 0)
                                                        <ol>
                                                            @foreach ($form->form_jsa_worker as $form_form_jsa_worker)
                                                                <li>
                                                                    {{ $form_form_jsa_worker->jsa_worker->name }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
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
