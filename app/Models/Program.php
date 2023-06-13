<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'program';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id');
    }
}
