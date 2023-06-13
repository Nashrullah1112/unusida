<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kp()
    {
        return $this->hasOne(Kp::class);
    }

    public function kkn()
    {
        return $this->hasOne(Kkn::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class, 'id_mahasiswa');
    }
}
