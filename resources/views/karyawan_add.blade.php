@extends('layouts.app')

@section('content')

<div class="container-fluid mx-auto table-responsive">
        <p><h5>Add Employee</h5></p>   
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Name <input type="text" name="nama" required placeholder="name">
                        NIK <input type="text" name="nik" required placeholder="nik">
                        NIP <input type="text" name="nip" required placeholder="nip">
                        NPWP <input type="text" name="npwp" required placeholder="npwp">
                        Address <input type="text" name="alamat" required placeholder="address">
                        Phone <input type="text" name="phone" required placeholder="+62">
                        Birth of Date <input type="date" name="tgl_lahir" required>
                    </ul>
                    <br/>
                    <input type="submit" value="Save" class="btn btn-success">
                    <a href="{{ route('employee.index') }}" class="btn btn-primary mr-2">Back</a>
                </form>
            </div>
        </div>       
</div>

@endsection