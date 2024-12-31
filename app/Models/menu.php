<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    /**
     * post
     *
     * @return void
     */

        //Nama tabel yang terkair dengan model
        protected $table = 'menu';

        //Kolom yang dapat diisi secara massal
        protected $fillable = [
            'nama',
            'harga',
            'kategori',
        ];
}
