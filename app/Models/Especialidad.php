<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidads';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function medicos()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
