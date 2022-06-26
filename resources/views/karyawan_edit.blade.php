@extends('layouts.app')

@section('content') 

<div class="container-fluid mx-auto table-responsive">
        <p><h5>Edit Data</h5></p>   
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Name <input type="text" name="nama" required value="{{ $employee->nama }}">
                        NIK <input type="text" name="nik" required value="{{ $employee->nik }}">
                        NIP <input type="text" name="nip" required value="{{ $employee->nip }}">
                        NPWP <input type="text" name="npwp" required value="{{ $employee->npwp }}">
                        Address <input type="text" name="alamat" required value="{{ $employee->alamat }}">
                        Phone <input type="text" name="phone" required value="{{ $employee->phone }}">
                        Birth of Date <input type="date" name="tgl_lahir" required value="{{ $employee->tgl_lahir }}">
                    </ul>
                    <br/>
                    <input type="submit" value="Edit" class="btn btn-success">
                    <a href="{{ route('employee.index') }}" class="btn btn-primary mr-2">Back</a>
                </form>
            </div>
        </div>       
</div>

@endsection