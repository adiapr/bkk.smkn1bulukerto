<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    // untuk menampilkan format tanggal indo
    protected $dates = ['tgl_lahir'];
}
