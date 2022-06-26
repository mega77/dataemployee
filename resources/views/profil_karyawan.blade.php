@extends('layouts.app')

@section('content')

<div class="container-fluid mx-auto table-responsive">
    <p>Employee's Profile</p>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $employee->nama }}</h5>
            <p class="card-text">{{ $employee->nik }}</p>
            <p class="card-text">NIP. {{ $employee->nip }}</p>
            <p class="card-text">NPWP. {{ $employee->npwp }}</p>
            <p class="card-text">📞 {{ $employee->phone }}</p>
            <p class="card-text">🏠 {{ $employee->alamat }}</p>
            <p class="card-text">🎂 {{ $employee->tgl_lahir }}</p>
        </div>
        @can('isAdmin')
        <a href="{{ route('employee.index') }}" class="btn btn-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
        </svg>&nbsp; Back</a>
        @endcan
    </div>       
</div>

@endsection