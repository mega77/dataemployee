<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
        'nama',
        'nip',
        'nik',
        'alamat',
        'phone',
        'npwp',
        'tgl_lahir'
    ];
}
