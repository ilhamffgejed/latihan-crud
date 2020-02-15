<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['id','kelas'];
    public $timestamps = true;

    public function siswa()
    {
        return $this->hasMany ('App\Siswa','id_kelas') ;
    }
}
