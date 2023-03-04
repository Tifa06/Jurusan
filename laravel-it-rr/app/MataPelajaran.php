<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';

    protected $fillable = [
        'id_jurusan',
        'nama',
        'deskripsi',
    ];

    public function jurusan()
    {
        return $this->belongsTo('App\jurusan', 'id_jurusan');
    }
}
