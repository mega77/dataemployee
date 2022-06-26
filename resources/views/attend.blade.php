@extends('layouts.app')

@section('content')

<div class="container-fluid text-center mx-auto">
    <p class="text-center"><h5>Employees Attendance</h5></p>
    <table class="table table-sm">
        <tr class="table-info">
            <td><b>No</b></td>
            <td><b>Name</b></td>
            <!-- <td><b>NIK</b></td> -->
            <td><b>Attendance</b></td>
            <td><b>Time Off</b></td>
            <td><b>Description</b></td>
        </tr>
        <?php $no=1;?>
        @foreach($attend as $a)
        <tr>
            <td>{{ $no; }}</td>
            <td>{{ $a->nama }}</td>
            <!-- <td>{{ $a->karyawan_id }}</td> -->
            <td>{{ $a->hadir }}&nbsp;days</td>
            <td>{{ $a->time_off }}&nbsp;days</td>
            <td><i>{{ $a->keterangan }}</i></td>
        </tr>
        <?php $no++ ;?>
        @endforeach
    </table>        
</div>

@endsection