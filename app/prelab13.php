<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\prelab13;

class prelab13 extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
       'id', 'nim', 'nama', 'gender', 'jurusan', 'bidang_minat'
    ];

    public $timestamps = false;
}
