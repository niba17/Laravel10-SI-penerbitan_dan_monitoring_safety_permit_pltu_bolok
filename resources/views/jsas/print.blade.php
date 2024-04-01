@extends('components.master_print')
@section('title', 'SASANDO | jsa_' . $jsa['name'] . '_' . now())
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th class="bg-primary text-light fs-1" colspan="10">PT. PLN NUSANTARA POWER SERVICES</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <tr>
                            <td class="fs-2 fw-bold" colspan="10">FORMULIR JOB SAFETY ANALYSIS</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" style="border-right:none;">NAMA PEKERJAAN (Sesuai Task WO)</td>
                            <td class="fw-bold" style="border-left:none;border-right:none;"> : </td>
                            <td style="border-left:none;" colspan="8"> {{ $jsa['name'] ?? '-' }} </td>
                        </tr>
                        <tr>
                            <td style="border-right:none;" class="fw-bold">DASAR PEKERJAAN (WO/SPK)</td>
                            <td style="border-left:none;border-right:none;" class="fw-bold"> : </td>
                            <td style="border-left:none;" colspan="8"> {{ $jsa['job_base'] ?? '-' }} </td>
                        </tr>
                        <tr>
                            <td style="border-right:none;" class="fw-bold">LOKASI</td>
                            <td style="border-left:none;border-right:none;" class="fw-bold"> : </td>
                            <td style="border-left:none;" colspan="8"> {{ $jsa['location'] ?? '-' }} </td>
                        </tr>
                        <tr>
                            <td style="border-right:none;" class="fw-bold">PELAKSANA PEKERJAAN</td>
                            <td style="border-left:none;border-right:none;" class="fw-bold"> : </td>
                            <td style="border-left:none;" colspan="8"> {{ $jsa['jsa_person_group']['name'] ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="border-right:none;" class="fw-bold">Tgl Hari Kerja</td>
                            <td style="border-left:none;border-right:none;" class="fw-bold"> : </td>
                            <td style="border-left:none;border-right:none;" colspan="5">
                                {{ ($jsa['start_date'] ?? '-') . ' sd ' . ($jsa['finish_date'] ?? '-') }} </td>
                            <td style="border-left:none;border-right:none;" class="fw-bold">Waktu Kerja Per Hari</td>
                            <td style="border-left:none;border-right:none;">:</td>
                            <td style="border-left:none;">
                                {{ ($jsa['start_time'] ?? '-') . ' sd ' . ($jsa['finish_time'] ?? '-') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="10" class="fw-bold">Beri tanda "<i class="fa-solid fa-check mx-1 fw-bolder"></i>"
                                Pada
                                Ijin
                                Pekerjaan yang harus dilengkapi :</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row bg-light mx-auto row-x-border mb-1 p-2">
            @foreach ($safety_permits as $safety_permit)
                @php
                    $bool = false;
                @endphp
                <div class="col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="container inline-div square-box">
                            @foreach ($jsa['jsa_jsa_safety_permit'] as $jsa_jsa_jsa_safety_permit)
                                @if ($jsa_jsa_jsa_safety_permit['jsa_safety_permit_uuid'] == $safety_permit['uuid'])
                                    @php
                                        $bool = true;
                                    @endphp
                                @endif
                            @endforeach
                            @if ($bool == true)
                                <i class="fa-solid fa-check ms-1 fw-bolder"></i>
                            @endif
                        </div>
                        <span class="ms-3 small">{{ $safety_permit['name'] ?? '-' }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row g-1">
            <div class="col-lg-12">
                <table class="table table-bordered bg-light mb-1">
                    <thead>
                        <tr>
                            <th width="50px" class="fs-4" style="color:black;">No.</th>
                            <th class="fs-4" style="color:black;">Nama Pekerja</th>
                            <th class="fs-4" style="color:black;">Skill / Posisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jsa['jsa_jsa_worker'] as $jsa_jsa_jsa_worker)
                            <tr>
                                <td class="fw-bolder">{{ $loop->iteration }}</td>
                                <td>{{ $jsa_jsa_jsa_worker['jsa_worker']['name'] ?? '-' }}</td>
                                <td>
                                    <ol>
                                        @foreach ($jsa_jsa_jsa_worker['jsa_worker']['jsa_worker_jsa_skill_or_position'] as $jsa_jsa_jsa_worker_jsa_worker_jsa_worker_jsa_worker_jsa_skill_or_position)
                                            <li>
                                                {{ $jsa_jsa_jsa_worker_jsa_worker_jsa_worker_jsa_worker_jsa_skill_or_position['jsa_skill_or_position']['name'] ?? '-' }}
                                            </li>
                                        @endforeach
                                    </ol>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12">
                <table class="table table-bordered bg-light col-lg-6 mb-0">
                    <thead>
                        <tr>
                            <th width="50px" class="fs-4" style="color:black;">No.</th>
                            <th class="fs-4" style="color:black;">Daftar Tools Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jsa['jsa_jsa_work_tool'] as $jsa_jsa_jsa_work_tool)
                            <tr>
                                <td class="fw-bolder">{{ $loop->iteration }}</td>
                                <td>{{ $jsa_jsa_jsa_work_tool['jsa_work_tool']['name'] ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12">
                <table class="table table-bordered bg-light col-lg-6 mb-1">
                    <thead>
                        <tr>
                            <th width="50px" class="fs-4" style="color:black;">No.</th>
                            <th class="fs-4" style="color:black;">Himbauan Ketentuan K3L</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($k3l_appeal_of_regulations as $k3l_appeal_of_regulation)
                            <tr>
                                <td class="fw-bolder">{{ $loop->iteration }}</td>
                                <td>{{ $k3l_appeal_of_regulation['name'] ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row g-1">
            <div class="col-lg-12">
                <table class="table table-bordered bg-light">
                    <thead>
                        <tr>
                            <th class="fw-bolder" width="50px" style="color:black;">No.</th>
                            <th width="200px" class="fs-4 text-center" style="color:black;">Tahapan Kerja</th>
                            <th class="fs-4 text-center" style="color:black;">Potensi Bahaya</th>
                            <th class="fs-4 text-center" style="color:black;">Dampak</th>
                            <th width="250px" class="fs-4 text-center" style="color:black;">PIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jsa['jsa_jsa_work_stage'] as $jsa_jsa_jsa_work_stage)
                            <tr>
                                <td class="fw-bolder">{{ $loop->iteration }}</td>
                                <td>{{ $jsa_jsa_jsa_work_stage['jsa_work_stage']['name'] ?? '-' }}</td>
                                <td class="p-0">
                                    <table class="table bg-light my-table-no-outside-border">
                                        @foreach ($jsa_jsa_jsa_work_stage['jsa_work_stage']['jsa_work_stage_jsa_potential_hazard'] as $potential_hazard)
                                            <tr>
                                                <td width="50px" class="fw-bolder w-1">
                                                    {{ '1.' . $loop->iteration . '. ' }}
                                                </td>
                                                <td>
                                                    {{ $potential_hazard['jsa_potential_hazard']['name'] ?? '-' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>

                                <td class="p-0">
                                    <table class="table bg-light my-table-no-outside-border">
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($jsa_jsa_jsa_work_stage['jsa_work_stage']['jsa_work_stage_jsa_potential_hazard'] as $jsa_jsa_jsa_work_stage_jsa_work_stage_jsa_work_stage_jsa_potential_hazard)
                                            @php
                                                $i++;
                                            @endphp
                                            @foreach ($jsa_jsa_jsa_work_stage_jsa_work_stage_jsa_work_stage_jsa_potential_hazard['jsa_potential_hazard']['jsa_potential_hazard_jsa_impact'] as $jsa_jsa_jsa_work_stage_jsa_work_stage_jsa_work_stage_jsa_potential_hazard_jsa_potential_hazard_jsa_potential_hazard_jsa_impact)
                                                <tr>
                                                    <td class="fw-bolder w-1">
                                                        {{ '1.1.' . $i . '. ' }}
                                                    </td>
                                                    <td>
                                                        {{ $jsa_jsa_jsa_work_stage_jsa_work_stage_jsa_work_stage_jsa_potential_hazard_jsa_potential_hazard_jsa_potential_hazard_jsa_impact['jsa_impact']['name'] ?? '-' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </table>
                                </td>

                                <td class="mx-0 px-0">

                                    @foreach ($jsa_jsa_jsa_work_stage['jsa_work_stage']['jsa_work_stage_jsa_pic'] as $jsa_jsa_jsa_work_stage_jsa_work_stage_jsa_work_stage_jsa_pic)
                                        <div class="text-center">
                                            {{ $jsa_jsa_jsa_work_stage_jsa_work_stage_jsa_work_stage_jsa_pic['jsa_pic']['name'] ?? '-' }}
                                            <br>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" rowspan="3">
                                <div class="mb-5 fw-bolder">
                                    Dibuat Oleh :
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="mt-5">
                                    {{ $jsa['jsa_creator'] ?? '-' }}
                                </div>
                                {{ '( ' . ($jsa['jsa_creator_position'] ?? '-') . ' )' }}
                            </td>
                            <td>
                                <div class="mb-5">
                                    {{ $jsa['jsa_supervisor_k3_unit'] ?? '-' }}
                                </div>
                                {{ $jsa['jsa_supervisor_k3'] ?? '-' }}
                            </td>
                            <td colspan="2">
                                <div class="text-center fw-bolder">{{ 'Sign :' }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="text-center fw-bolder">{{ 'Created :' }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3 text-center fw-bolder">
                                    {{ 'Tanggal :' }}
                                </div>
                                <div class="text-center">
                                    {{ $jsa['start_date'] ?? '-' }}
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="mb-3 text-center fw-bolder">
                                    {{ 'Waktu :' }}
                                </div>
                                <div class="text-center">
                                    {{ $jsa['start_time'] ?? '-' }}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .square-box {
            width: 45px;
            height: 45px;
            border: 2px solid black;
        }

        .inline-div {
            flex-shrink: 0;
            border: 1px solid black;
            margin: 5px;
        }

        .container {
            display: flex;
            align-items: center;
            border-color: black;
            background-color: white;
        }

        .table {
            /* border-collapse: collapse; */
            width: 100%;
            border-spacing: 0;
            border-color: black;
            background-color: white;
        }

        .row-x-border {
            border-left: 1px solid black;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
        }

        .my-table-no-outside-border {
            border-collapse: collapse;
            border-spacing: 0;
            border: none;
            /* Remove outside border */
            margin-bottom: 0px;
        }

        .my-table-no-outside-border tr td:first-child {
            border-right: 1px solid black;
            /* Add border to the right side of the first <td> element */
        }

        .my-table-no-outside-border td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid rgb(0, 0, 0);
            /* Add border-bottom to all <td> elements */
        }

        .my-table-no-outside-border th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .table td {
            font-size: 12px;
            /* Adjust the font size as needed */
        }
    </style>
    <script>
        window.print()
    </script>
@endsection
