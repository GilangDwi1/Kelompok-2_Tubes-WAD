<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'usia',
        'alamat',
        'telepon',
    ];

    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at
}
