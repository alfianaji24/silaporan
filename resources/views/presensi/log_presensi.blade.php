@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-fluid">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                    Log Data Presensi Fingerprint
                </h2>
            </div>

        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>PIN</th>
                                            <th>Nama</th>
                                            <th>Scan Date</th>
                                            <th>Status Scan</th>
                                            <th>#</th>
                                        </tr>
                                        @foreach ($filtered_array as $d)
                                        <tr>
                                            <td>{{ $d->pin }}</td>
                                            <td>{{ $d->status_scan % 2 == 0 ? "IN" : "OUT"}} ({{ $d->status_scan }})</td>
                                            <td>{{ date("d-m-Y H:i:s",strtotime($d->scan_date)) }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/presensi/{{ Crypt::encrypt($d->pin) }}/0/{{ date("Y-m-d H:i:s",strtotime($d->scan_date)) }}/updatefrommachine"> <i class="feather icon-log-in success mr-1"></i> Masuk </a>
                                                    <a href="/presensi/{{ Crypt::encrypt($d->pin) }}/1/{{ date("Y-m-d H:i:s",strtotime($d->scan_date)) }}/updatefrommachine" class="mr-1"> <i class="feather icon-log-out danger ml-1"></i> Pulang </a>
                                                </div>
                                            </td>
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
