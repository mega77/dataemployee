<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AttendController;
use App\Http\Controllers\PayrollController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('beranda');
});

Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/data-employee', [MenuController::class, 'data_employee']);
//Route::get('/data-attend', [MenuController::class, 'data_attend']);
//Route::get('/data-payroll', [MenuController::class, 'data_payroll']);
//Route::get('/data-user', [MenuController::class, 'data_user']); 
Route::get('/data-attend', [AttendController::class, 'index'])->name('attend');
Route::get('/data-user', [UsersController::class, 'index'])->name('users');
Route::get('/data-payroll', [PayrollController::class, 'index'])->name('payroll');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('employee', EmployeeController::class)->middleware('can:isAdmin');
Route::resource('employee', EmployeeController::class)->only('show')->middleware('can:isAdminKaryawan');

Route::resource('users', UsersController::class)->middleware('can:isAdmin');
