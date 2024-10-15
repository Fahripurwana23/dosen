<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nidn',
        'nama_dosen',
        'tgl_mulai_tugas',
        'bidang_keilmuan',
        'jenjang_pendidikan',
        'foto_dosen',
];
}
