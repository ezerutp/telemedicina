<?php

namespace App\Models;
use App\Models\Medico;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function medicos()
    {
        return $this->belongsToMany(Medico::class, 'medico_especialidad', 'especialidad_id', 'medico_id');
    }
}
