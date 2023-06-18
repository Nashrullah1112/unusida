<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'dosens';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'dosen_id', 'id');
    }
}
