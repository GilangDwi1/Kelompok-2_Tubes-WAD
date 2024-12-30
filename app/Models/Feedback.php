<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    //Nama tabel yang terkair dengan model
    protected $table = 'feedback';

    //Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',
        'isi',
    ];
}
