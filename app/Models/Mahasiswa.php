<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }

    // public function kp()
    // {
    //     return $this->hasOne(Kp::class);
    // }

    // public function kkn()
    // {
    //     return $this->hasOne(Kkn::class);
    // }

    // public function kegiatan()
    // {
    //     return $this->hasMany(Program::class, 'id_mahasiswa');
    // }

    public function logbooks()
    {
        return $this->hasMany(Logbook::class);
    }
}
