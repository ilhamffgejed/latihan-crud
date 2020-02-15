<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = ['nama'];
    public $timestamps = true;

    public function siswa()
    {
        return $this->belongsToMany(
            'App\Siswa',
            'mapel_siswa',
            'id_mapel',
            'id_siswa'
        );
    }
}
