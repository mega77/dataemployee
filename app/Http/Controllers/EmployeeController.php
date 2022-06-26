<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakaryawan = Employee::all();
        return view('index', ['employee' => $datakaryawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'tgl_lahir' => $request->tgl_lahir,
            'npwp' => $request->npwp
        ]);

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Employee::where('id', $id)->first();
        return view('profil_karyawan', ['employee' => $karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Employee::find($id);
        return view('karyawan_edit', ['employee' => $karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $karyawan = Employee::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->nip = $request->nip;
        $karyawan->nik = $request->nik;
        $karyawan->npwp = $request->npwp;
        $karyawan->alamat = $request->alamat;
        $karyawan->phone = $request->phone;
        $karyawan->tgl_lahir = $request->tgl_lahir;
        $karyawan->save();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Employee::find($id);
        $karyawan->delete();

        return redirect()->route('employee.index');
    }
}
