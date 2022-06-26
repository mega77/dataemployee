<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('beranda');
    }
    public function data_employee(){
        return view('employee');
    }
    public function data_attend(){
        return view('attend');
    }
    public function data_payroll(){
        return view('payroll');
    }
    public function data_user(){
        return view('users');
    }

}
