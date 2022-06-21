<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswanew extends Model
{
    protected $table = 'mahasiswanew';

    protected $fillable = [
        'id', 'nim', 'nama', 'gender', 'jurusan', 'bidang_minat'

    ];
}
