@extends('components.master_print')
@section('title', 'SASANDO | ' . $form['jsa_safety_permit']['name'] . '_' . $form['to_carry_out_work'] . '_' . now())
@section('content')
    <div class="page-wrapper">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th class="bg-primary text-light fs-1" colspan="6">PT. PLN NUSANTARA POWER SERVICES</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <td class="fs-2 fw-bolder" colspan="6">
                        {{ 'FORMULIR ' . strtoupper($form['jsa_safety_permit']['name']) }}
                    </td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Diminta Oleh</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;"> {{ $form['jsa_person_group']['name'] ?? '-' }} </td>
                    <td class="fw-bolder" style="border-right:none;">Rencana Pekerjaan</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;">
                        {{ ($form['start_date'] ?? '-') . ' s/d ' . ($form['finish_date'] ?? '-') . ', Jam : ' . ($form['start_time'] ?? '-') . ' s/d ' . ($form['finish_time'] ?? '-') }}
                    </td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Untuk Melaksanakan Pekerjaan</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;"> {{ $form['to_carry_out_work'] ?? '-' }} </td>
                    <td class="fw-bolder" style="border-right:none;">Nomor WO, Task</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;"> {{ $form['job_base_number'] ?? '-' }} </td>
                </tr>
                <tr>
                    <td class="fw-bolder" style="border-right:none;">Di Lokasi (Unit #, Daerah)</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;"> {{ $form['unit_territory'] ?? '-' }} </td>
                    <td class="fw-bolder" style="border-right:none;">Perusahaan/ Bidang</td>
                    <td class="fw-bolder" style="border-left:none;border-right:none;"> : </td>
                    <td style="border-left:none;"> {{ $form['company_or_field'] ?? '-' }} </td>
                </tr>
                <tr>
                    <td colspan="6" class="fw-bolder text-center">Persetujuan Ijin Kerja Oleh Competent Person</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row g-1 mt-1">
        <div class="col-lg-6">
            <table class="table table-bordered mb-0">
                <thead class="bg-light">
                    <tr>
                        <td colspan="6" class="fw-bolder text-center">A. Masa berlaku ijin kerja
                            ini s/d
                        </td>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <tr style="border-bottom: none;">
                        <td style="border-right:none;">Tanggal</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;border-right:none;">{{ $form['start_date'] }}</td>
                        <td style="border-left:none;border-right:none;">Jam</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;">{{ $form['start_time'] }}</td>
                    </tr>
                    <tr style="border-top: none;border-bottom: none;">
                        <td class="fw-bolder text-center" colspan="6">s/d</td>
                    </tr>
                    <tr style="border-top: none;">
                        <td style="border-right:none;">Tanggal</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;border-right:none;">{{ $form['finish_date'] }}</td>
                        <td style="border-left:none;border-right:none;">Jam</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;">{{ $form['finish_time'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <table class="table table-bordered mb-0">
                <thead class="bg-light">
                    <tr>
                        <td colspan="8" class="fw-bolder text-center">B. Bila pekerjaan ditunda
                        </td>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <tr style="border-bottom:none;">
                        <td style="border-right:none;">Tanggal</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;border-right:none;">{{ $form['delay_start_date'] ?? '-' }}</td>
                        <td style="border-left:none;border-right:none;">Jam</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;">{{ $form['delay_start_time'] ?? '-' }}</td>
                        <td style="border-right:none;">Sebab</td>
                        <td style="border-left:none;">:</td>
                    </tr>
                    <tr style="border-top: none;border-bottom: none;">
                        <td class="fw-bolder text-center" colspan="6">Mulai kerja dari penundaan
                        </td>
                        <td class="fw-bolder text-center" rowspan="2" colspan="2">
                            {{ $form['delay_excuse'] ?? '-' }}
                        </td>
                    </tr>
                    <tr style="border-top:none;">
                        <td style="border-right:none;">Tanggal</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;border-right:none;">{{ $form['delay_start_date'] ?? '-' }}</td>
                        <td style="border-left:none;border-right:none;">Jam</td>
                        <td style="border-left:none;border-right:none;">:</td>
                        <td style="border-left:none;">{{ $form['delay_start_time'] ?? '-' }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row g-1 mt-1">
        <div class="col-lg-12">
            <table class="table table-bordered mb-0">
                <tbody class="bg-light">
                    <tr>
                        <td colspan="6" class="fw-bolder text-center">Daftar Periksa dan Paraf Pemeriksa (Diisi oleh
                            Competent Person)</td>
                    </tr>
                </tbody>
                <tbody class="bg-light">
                    <tr>
                        <td rowspan="2" colspan="2" class="fw-bolder text-center" style="vertical-align: middle;">
                            Deskripsi
                        </td>
                        <td colspan="2" class="fw-bolder text-center">
                            BIDANG CP
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bolder text-center">
                            Yes
                        </td>
                        <td class="fw-bolder text-center">
                            N/A
                        </td>
                    </tr>
                    @foreach ($descriptions as $description)
                        @php
                            $bool = false;
                        @endphp
                        <tr>
                            <td width="50px" style="border-right: none;" class="fw-bolder">
                                {{ $loop->iteration . '.' }}
                            </td>
                            <td style="border-left: none;">
                                {{ $description['name'] }}
                            </td>
                            <td class="text-center">
                                @foreach ($form['form_form_description'] as $form_form_form_description)
                                    @if ($description['uuid'] == $form_form_form_description['form_description_uuid'])
                                        @php
                                            $bool = true;
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($bool == true)
                                    <i class="fa-solid fa-check ms-1 fw-bolderer"></i>
                                @endif
                            </td>
                            <td class="text-center">
                                @if ($bool == false)
                                    <i class="fa-solid fa-check ms-1 fw-bolderer"></i>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row g-1 mt-1">
        <div class="col-lg-7">
            <table class="table table-bordered mb-0">
                <tbody class="bg-light">
                    <tr>
                        <td class="fw-bolder text-center" colspan="2">Alat-alat Pelindung Diri Yang Wajib Dipakai :
                        </td>
                        <td class="fw-bolder text-center">Paraf CP</td>
                    </tr>
                    @if (count($form['form_form_protective_equipment']) > 0)
                        @foreach ($form['form_form_protective_equipment'] as $key => $form_form_form_protective_equipment)
                            <tr>
                                <td width="50px" class="fw-bolder" style="border-right:none;">
                                    {{ $loop->iteration . '.' }}
                                </td>
                                <td style="border-left:none;">
                                    {{ $form_form_form_protective_equipment['form_protective_equipment']['name'] }}</td>
                                @if ($key === 0)
                                    <td rowspan="{{ count($form['form_form_protective_equipment']) }}"></td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>-</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-5">
            <table class="table table-bordered mb-0">
                <tbody class="bg-light">
                    <tr>
                        <td class="fw-bolder text-center" colspan="2">Catatan Tambahan Lainnya
                            :</td>
                    </tr>
                    @if (count($form['form_form_additional_note']) > 0)
                        @foreach ($form['form_form_additional_note'] as $key => $form_form_form_additional_note)
                            <tr>
                                <td width="50px" class="fw-bolder" style="border-right:none;">
                                    {{ $loop->iteration . '.' }}
                                </td>
                                <td style="border-left:none;">
                                    {{ $form_form_form_additional_note['form_additional_note']['name'] }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>-</td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
    <div class="row g-1 mt-1">
        <div class="col-lg-12">
            <table class="table table-bordered mb-0">
                <tbody class="bg-light">
                    <tr>
                        <td colspan="5" class="fw-bolder text-center">Nama Pekerja Yang Terlibat :</td>
                    </tr>
                </tbody>
                <tbody class="bg-light">
                    <tr>
                        <td colspan="2" class="fw-bolder text-center">
                            Nama
                        </td>
                        <td colspan="2" class="fw-bolder text-center">
                            Skill/ Posisi
                        </td>
                    </tr>
                    @if (count($form['form_jsa_worker']) > 0)
                        @foreach ($form['form_jsa_worker'] as $form_form_jsa_worker)
                            <tr>
                                <td style="border-right:none;" width="50px" class="fw-bolder">
                                    {{ $loop->iteration . '.' }}</td>
                                <td style="border-left:none;">{{ $form_form_jsa_worker['jsa_worker']['name'] }}</td>
                                @if (count($form_form_jsa_worker['jsa_worker']['jsa_worker_jsa_skill_or_position']) > 0)
                                    @foreach ($form_form_jsa_worker['jsa_worker']['jsa_worker_jsa_skill_or_position'] as $form_form_jsa_worker_jsa_worker_jsa_worker_jsa_skill_or_position)
                                        <td width="50px" class="fw-bolder" style="border-right:none;">
                                            {{ $loop->iteration . '.' }}</td>
                                        <td style="border-left:none;">
                                            {{ $form_form_jsa_worker_jsa_worker_jsa_worker_jsa_skill_or_position['jsa_skill_or_position']['name'] }}

                                        </td>
                                    @endforeach
                                @else
                                    <td>-</td>
                                    <td></td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>-</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row g-1 mt-1">
        <div class="col-lg-6">
            <table class="table table-bordered mb-0">
                <tbody class="bg-light">
                    <tr>
                        <td colspan="4" class="fw-bolder text-center">Approve Start</td>
                    </tr>
                    <tr style="border-bottom:none;">
                        <td class="text-center fw-bolder" style="border-right:none;">
                            Competent Person
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            Supervisor Produksi
                        </td>
                        <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            User Pekerjaan
                        </td>
                    </tr>
                    <tr style="border-top:none;border-bottom:none;">
                        <td class="text-center fw-bolder" style="border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            Bidang
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['approve_start_job_field'] }}
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
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;">

                        </td>
                    </tr>
                    <tr style="border-top:none;border-bottom:none;">
                        <td class="text-center fw-bolder" style="border-right:none;">
                            {{ $form['approve_start_competent_person'] }}
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            {{ $form['approve_start_production_supervisor'] }}
                        </td>
                        <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['approve_start_job_user'] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <table class="table table-bordered mb-0">
                <tbody class="bg-light">
                    <tr>
                        <td colspan="4" class="fw-bolder text-center">Clearance</td>
                    </tr>
                    <tr style="border-bottom:none;">
                        <td class="text-center fw-bolder" style="border-right:none;">
                            Competent Person
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            Supervisor Produksi
                        </td>
                        <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            User Produksi
                        </td>
                    </tr>
                    <tr style="border-top:none;border-bottom:none;">
                        <td class="text-center fw-bolder" style="border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            Bidang
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['clearance_job_field'] }}
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
                            {{ $form['clearance_competent_person'] }}
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            {{ $form['clearance_production_supervisor'] }}
                        </td>
                        <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['clearance_job_user'] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row g-1">
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
                            <span class="fw-bolder">Tanggal & jam : </span> {{ $form['third_party_date'] ?? '-' }} /
                            {{ $form['third_party_time'] ?? '-' }}
                        </td>
                        <td class="text-start fw-bolder" style="border-left:none;border-right:none;">

                        </td>
                        <td width="200px" colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['third_party_person'] ?? '-' }}
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
                        <td class="text-center fw-bolder" style="border-right:none;">
                            Competent Person
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            Supervisor Produksi
                        </td>
                        <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            User Produksi
                        </td>
                    </tr>
                    <tr style="border-top:none;border-bottom:none;">
                        <td class="text-center fw-bolder" style="border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">

                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            Bidang
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['cancellation_job_field'] ?? '-' }}
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
                        <td class="text-center fw-bolder" style="border-right:none;">
                            {{ $form['cancellation_competent_person'] ?? '-' }}
                        </td>
                        <td class="text-center fw-bolder" style="border-left:none;border-right:none;">
                            {{ $form['cancellation_production_supervisor'] ?? '-' }}
                        </td>
                        <td colspan="2" class="text-center fw-bolder" style="border-left:none;">
                            {{ $form['cancellation_job_user'] ?? '-' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>
    <style>
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
    <script>
        window.print()
    </script>
@endsection
