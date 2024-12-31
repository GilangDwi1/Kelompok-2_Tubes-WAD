<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

        protected $fillable = [
        'nama',
        'tanggal_pesanan',
        'waktu_pemesanan',
        'status',
    ];
}
