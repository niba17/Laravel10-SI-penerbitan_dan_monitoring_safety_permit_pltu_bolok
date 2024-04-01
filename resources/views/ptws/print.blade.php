@extends('components.master_print')
@section('title', 'SASANDO | ' . $ptw['job_name'] . '_' . now())
@section('content')
    <div class="page-wrapper">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th class="bg-primary text-light fs-1" colspan="9">PT. PLN NUSANTARA POWER SERVICES</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <td class="fs-2 fw-bolder" colspan="9">{{ 'FORMULIR PERMIT TO WORK' }}
                    </td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Nomer PTW</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td colspan="7" style="border-left:none;"> {{ $ptw['ptw_number'] ?? '-' }} </td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Lokasi / Work Area</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;border-right:none;"> {{ $ptw['location'] ?? '-' }} </td>

                    <td class="fw-bolder" style="border-left:none;border-right:none;">Working Party</td>
                    <td width="10px" class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td width="10px" style="border-left:none;border-right:none;">
                        <div class="container inline-div square-box my-0">
                            @if ($ptw['working_party'] == 'Yes')
                                <i class="fa-solid fa-check fw-bolderer"></i>
                            @endif
                        </div>
                    </td>
                    <td width="10px" style="border-left:none;border-right:none;">Yes</td>
                    <td width="10px" style="border-left:none;border-right:none;">
                        <div class="container inline-div square-box my-0">
                            @if ($ptw['working_party'] == 'No')
                                <i class="fa-solid fa-check fw-bolderer"></i>
                            @endif
                        </div>
                    </td>
                    <td width="10px" style="border-left:none;">No</td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">KKS Equipment Number</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;border-right:none;"> {{ $ptw['kks_equipment_number'] ?? '-' }} </td>

                    <td class="fw-bolder" style="border-left:none;border-right:none;">Status Pekerjaan</td>
                    <td width="10px" class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td width="10px" style="border-left:none;border-right:none;">
                        <div class="container inline-div square-box my-0">
                            @if ($ptw['work_status'] == 'Online')
                                <i class="fa-solid fa-check fw-bolderer"></i>
                            @endif
                        </div>
                    </td>
                    <td width="10px" style="border-left:none;border-right:none;">Online</td>
                    <td width="10px" style="border-left:none;border-right:none;">
                        <div class="container inline-div square-box my-0">
                            @if ($ptw['work_status'] == 'Offline')
                                <i class="fa-solid fa-check fw-bolderer"></i>
                            @endif
                        </div>
                    </td>
                    <td width="10px" style="border-left:none;">Offline</td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Nama Pekerjaan</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td colspan="1" style="border-left:none;border-right:none;"> {{ $ptw['job_name'] ?? '-' }} </td>
                    <td colspan="2" style="border-left:none;border-right:none;"></td>



                    <td width="10px" style="border-left:none;border-right:none;">
                        <div class="container inline-div square-box my-0">
                            @if ($ptw['certificate'] == 'Access Certificate')
                                <i class="fa-solid fa-check fw-bolderer"></i>
                            @endif
                        </div>
                    </td>
                    <td width="10px" style="border-left:none;border-right:none;">Acces Certificate</td>
                    <td width="10px" style="border-left:none;border-right:none;">
                        <div class="container inline-div square-box my-0">
                            @if ($ptw['certificate'] == 'PTW Certificate')
                                <i class="fa-solid fa-check fw-bolderer"></i>
                            @endif
                        </div>
                    </td>
                    <td width="10px" style="border-left:none;">PTW Certificate</td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Durasi Pekerjaan</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td colspan="7" style="border-left:none;"> {{ $ptw['job_duration'] ?? '-' }} </td>
                </tr>
                <tr>
                    <td class="fw-bolder" colspan="2" style="border-right:none;">
                        Tahapan dari pencegahan yang disetujui dari tindakan keseluruhan pada sistem yaitu
                    </td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;">:</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;">
                        No Work Order / SPK
                    </td>
                    <td class="fw-bolder" colspan="5" style="border-left:none;">:</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered mt-2 mb-0">
            <tbody>
                <tr class="fw-bolder">
                    <td width="50px">No</td>
                    <td>Deskripsi (Description)</td>
                    <td>Metode Isolasi (Method of Isolation)</td>
                    <td>Isolasi (Isolation By)</td>
                    <td>Signature Date</td>
                    <td>Area</td>
                    <td>Restorasi (Restoration By)</td>
                    <td>Signature Date</td>
                    <td>PMT (PMT By)</td>
                    <td>Signature Date</td>
                </tr>
                @if (count($ptw['ptw_ptw_description']) > 0)

                    @foreach ($ptw['ptw_ptw_description'] as $ptw_ptw_ptw_description)
                        <tr>
                            <td class="fw-bolder">{{ $loop->iteration }}</td>
                            <td>
                                {{ $ptw_ptw_ptw_description['ptw_description']['name'] }}
                            </td>
                            <td>
                                @if (count($ptw_ptw_ptw_description['ptw_description']['ptw_description_ptw_isolation_method']) > 0)
                                    <ol>
                                        @foreach ($ptw_ptw_ptw_description['ptw_description']['ptw_description_ptw_isolation_method'] as $ptw_ptw_ptw_description_ptw_description_ptw_description_ptw_isolation_method)
                                            <li>{{ $ptw_ptw_ptw_description_ptw_description_ptw_description_ptw_isolation_method['ptw_isolation_method']['name'] }}
                                            </li>
                                        @endforeach
                                    </ol>
                                @else
                            <td>{{ '-' }}</td>
                    @endif
                    </td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['isolation_by'] }}</td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['isolation_signature_date'] ?? '-' }}</td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['area'] ?? '-' }}</td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['restoration_by'] ?? '-' }}</td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['restoration_signature_date'] ?? '-' }}</td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['pmt_by'] ?? '-' }}</td>
                    <td>{{ $ptw_ptw_ptw_description['ptw_description']['pmt_signature_date'] ?? '-' }}</td>
                    </tr>
                @endforeach
            @else
                <td>{{ '-' }}</td>
                @endif
            </tbody>
        </table>
        <table class="table table-bordered mt-2 mb-0">
            <tbody>
                <tr class="fw-bolder">
                    <td colspan="2" class="text-center">Catatan Tambahan</td>
                </tr>
                <tr class="fw-bolder">
                    <td width="50px">No</td>
                    <td>Catatan Tambahan</td>
                </tr>
                @if (count($ptw['ptw_ptw_note']) > 0)

                    @foreach ($ptw['ptw_ptw_note'] as $ptw_ptw_ptw_note)
                        <tr>
                            <td class="fw-bolder">{{ $loop->iteration }}</td>
                            <td>
                                {{ $ptw_ptw_ptw_note['ptw_note']['name'] }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <td>
                        {{ '-' }}
                    </td>
                @endif
            </tbody>
        </table>
        <div class="row g-1">
            <div class="col-lg-8">
                <table class="table table-bordered mt-2 mb-0">
                    <tbody>
                        <tr class="fw-bolder">
                            <td class="text-center">Precaution & Hazard</td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <div class="row bg-light mx-auto mb-0 p-2">
                                    @foreach ($safety_permits as $safety_permit)
                                        @php
                                            $bool = false;
                                        @endphp
                                        <div class="col-lg-3">
                                            <div class="d-flex align-items-center">
                                                <div class="container inline-div square-box">
                                                    @foreach ($ptw['ptw_jsa_safety_permit'] as $ptw_ptw_jsa_safety_permit)
                                                        @if ($ptw_ptw_jsa_safety_permit['jsa_safety_permit_uuid'] == $safety_permit['uuid'])
                                                            @php
                                                                $bool = true;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    @if ($bool == true)
                                                        <i class="fa-solid fa-check fw-bolderer"></i>
                                                    @endif
                                                </div>
                                                <span class="ms-3 small">{{ $safety_permit['name'] ?? '-' }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <table class="table table-bordered mt-2 mb-0">
                    <tbody>
                        <tr class="fw-bolder">
                            <td class="text-center">Mengetahui</td>
                        </tr>
                        <tr style="border-bottom:none;">
                            <td></td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td></td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center">{{ $ptw['knowing'] }}</td>
                        </tr>
                        <tr style="border-top:none;">
                            <td class="text-center fw-bolder">{{ $ptw['knowing_position'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-2 g-1">
            <div class="col-lg-6">
                <table class="table table-bordered mb-0">
                    <tbody class="bg-light">
                        <tr>
                            <td colspan="2" class="fw-bolder text-center">Approve Start</td>
                        </tr>
                        <tr style="border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">
                                PTW Officer (Supervisor Produksi)
                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">
                                Supervisor Pemeliharaan
                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">
                                {{ $ptw['approve_start_ptw_officer'] }}
                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">
                                {{ $ptw['approve_start_maintenance_supervisor'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <table class="table table-bordered mb-0">
                    <tbody class="bg-light">
                        <tr>
                            <td colspan="2" class="fw-bolder text-center">Clearance</td>
                        </tr>
                        <tr style="border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">
                                PTW Officer (Supervisor Produksi)
                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">
                                Supervisor Pemeliharaan
                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">
                                {{ $ptw['clearance_ptw_officer'] }}
                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">
                                {{ $ptw['clearance_maintenance_supervisor'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-2 g-1">
            <div class="col-lg-6">
                <table class="table table-bordered mb-0">
                    <tbody class="bg-light">
                        <tr>
                            <td colspan="4" class="fw-bolder text-center">(Pihak ke 3)</td>
                        </tr>
                        <tr style="border-bottom:none;">
                            <td class="fw-bolder" style="border-right:none;">
                                Saya setuju dengan semua kondisi sesuai dengan Ijin kerja ini dalam melaksanakan pekerjaan.
                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;">
                            <td style="border-right:none;">
                                <span class="fw-bolder">Tanggal & jam : </span> {{ $ptw['third_party_date'] ?? '-' }} /
                                {{ $ptw['third_party_time'] ?? '-' }}
                            </td>
                            <td class="text-start fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td width="200px" colspan="2" class="text-center fw-bolder" style="border-left:none;">
                                {{ $ptw['third_party_person'] ?? '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <table class="table table-bordered mb-0">
                    <tbody class="bg-light">
                        <tr>
                            <td colspan="4" class="fw-bolder text-center">Cancellation</td>
                        </tr>
                        <tr style="border-bottom:none;">
                            <td class="fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;border-bottom:none;">
                            <td class="text-center fw-bolder" style="border-right:none;">

                            </td>
                            <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                        <tr style="border-top:none;">
                            <td style="border-right:none;">

                            </td>
                            <td class="text-start fw-bolder" style="border-left:none;border-right:none;">

                            </td>
                            <td width="200px" colspan="2" class="text-center fw-bolder" style="border-left:none;">

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        print()
    </script>
    <style>
        .square-box {
            width: 30px;
            height: 30px;
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

        .table td {
            font-size: 12px;
            /* Adjust the font size as needed */
        }
    </style>
    {{-- <script>
        window.print()
    </script> --}}
@endsection
