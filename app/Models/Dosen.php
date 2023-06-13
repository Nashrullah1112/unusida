<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 
    protected $table='dosens';

    public function logbook()
    {
        return $this->hasOne(Logbook::class);
    }
    public function program()
    {
        return $this->hasMany(Program::class, 'id_dosen');
    }
}
