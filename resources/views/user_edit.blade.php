@extends('layouts.app')

@section('content')

<div class="container-fluid mx-auto table-responsive">
        <p><h5>Edit Data</h5></p>   
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('users.update', $users->id) }}" method="POST">
                    @csrf 
                    @method('PUT')
                    <ul class="list-group">
                    Name <input type="text" name="name" required value="{{  $users->name }}">
                    Role <select id="role" name="role" required>
                            <option>{{ $users->role }}</option>
                            <option value="Admin">Admin</option>
                            <option value="Karyawan">Staff</option>
                        </select>
                    ID Access <input type="text" name="karyawan_id" placeholder="ID Access" value="{{ $users->karyawan_id }}">
                    E-mail <input type="email" name="email" placeholder="abcde@email.com" required value="{{ $users->email }}">
                    Password <input type="password" name="password" minlength="8" required placeholder="input your password">
                </br>
                </ul>
                    <input type="submit" value="Edit" class="btn btn-success">
                    <a href="{{ route('users.index') }}" class="btn btn-primary mr-2">Back</a>
                </form>
            </div>
        </div>       
</div>

@endsection