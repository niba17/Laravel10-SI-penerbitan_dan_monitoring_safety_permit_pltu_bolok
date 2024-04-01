@extends('components.master')
@section('title', 'SASANDO | Home - index')
@section('content')

    <div class="page-wrapper">

        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Home
                        </h2>
                        <div class="text-muted mt-1">Total <strong>:</strong> {{ count($jsas) }} JSA <strong>|</strong>
                            {{ count($forms) }}
                            Safety Permit <strong>|</strong>
                            {{ count($ptws) }} PTW
                        </div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="d-flex">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-lg-12 mt-0">
                        <canvas id="myPieChart" width="300" height="250"></canvas>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive m-2">
                                <table class="table table-vcenter card-table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pekerjaan</th>
                                            <th>Bidang / Perusahaan</th>
                                            <th>WO</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jsas as $jsa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $jsa->name }}
                                                </td>
                                                <td>
                                                    {{ $jsa->jsa_person_group->name ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->job_base ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->location ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->start_date ?? '-' }}
                                                </td>
                                                <td>
                                                    {{ $jsa->finish_date ?? '-' }}
                                                </td>
                                                <td>
                                                    @if ($jsa->status == 'Mulai')
                                                        <span class="fw-bolder"
                                                            style="color:rgb(15, 224, 60);">{{ $jsa->status ?? '-' }}</span>
                                                    @elseif($jsa->status == 'Ditunda')
                                                        <span class="fw-bolder"
                                                            style="color:rgb(255, 208, 68);">{{ $jsa->status ?? '-' }}</span>
                                                    @else
                                                        <span class="fw-bolder"
                                                            style="color:rgb(255, 96, 96);">{{ $jsa->status ?? '-' }}</span>
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
        @if (Auth::user()->getRoleNames()->isNotEmpty())
            <script>
                var jsas
                $.ajax({
                    url: "{{ route('jsas-jsa_jsa_safety_permit_request') }}",
                    method: 'GET',
                    cache: false,
                    dataType: 'json',
                    success: function(data) {
                        var mulai = 0;
                        var ditunda = 0;
                        var closed = 0;
                        data[0].forEach(jsa => {
                            if (jsa.status == 'Mulai') {
                                mulai++;
                            }
                            if (jsa.status == 'Ditunda') {
                                ditunda++;
                            }
                            if (jsa.status == 'Closed') {
                                closed++;
                            }
                        });

                        console.log(mulai);
                        console.log(ditunda);
                        console.log(closed);
                        var ctx = document.getElementById('myPieChart').getContext('2d');
                        var myPieChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Mulai', 'Ditunda', 'Closed'],
                                datasets: [{
                                    label: 'Status JSA',
                                    data: [mulai, ditunda, closed],
                                    backgroundColor: [
                                        'rgb(86, 247, 94)',
                                        'rgb(247, 247, 69)',
                                        'rgb(255, 96, 96)',
                                    ],
                                    hoverOffset: 4
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            </script>
        @endif
    @endsection
