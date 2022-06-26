@extends('layouts.app')

@section('content')

<div class="container-fluid text-center mx-auto">
    <p><h5>Salary Payments Information</h5></p>
    <table class="table table-sm">
        <tr class="table-success">
            <td><b>No</b></td>
            <td><b>Date</b></td>
            <td><b>Name</b></td>
            <td><b>Salary</b></td>
            <td><b>Allowance</b></td>
            <td><b>NPWP</b></td>
            <td><b>BPJS Ketenaga Kerjaan</b></td>
            <td><b>BPJS Kesehatan</b></td>
            <td><b>Status</b></td>
        </tr>
        <?php $no=1;?>
        @foreach($payroll as $a)
        <tr>
            <td>{{ $no; }}</td>
            <td>{{ date('d F Y', strtotime($a->paydate)) }}</td>
            <td>{{ $a->nama }}</td>
            <td>Rp {{ number_format($a->salary,2,',','.') }}</td>
            <td>Rp {{ number_format($a->allowance,2,',','.') }}</td>
            <td>Rp {{ number_format($a->npwp,2,',','.') }}</td>
            <td>Rp {{ number_format($a->bpjs_kerja,2,',','.') }}</td>
            <td>Rp {{ number_format($a->bpjs_kes,2,',','.') }}</td>
            <td><i>{{ $a->status }}</i></td>
        </tr>
        <?php $no++ ;?>
        @endforeach
    </table>        
</div>

@endsection