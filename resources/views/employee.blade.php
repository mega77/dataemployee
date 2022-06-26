@extends('layouts.app')

@section('content')

<div class="container-fluid text-center mx-auto">
    <p><h5>Employees Data</h5></p>
    <table class="table table-sm">
        <tr class="table-warning">
            <td><b>No</b></td>
            <td><b>Name</b></td>
            <td><b>Division</b></td>
            <td><b>Section</b></td>
        </tr>
        <tr>
            <td>1</td><td>Hamid</td><td>IT</td><td>Leader</td>
        </tr>
        <tr>
            <td>2</td><td>Haura</td><td>Accounting</td><td>Manager</td>
        </tr>
    </table>        
</div>

@endsection