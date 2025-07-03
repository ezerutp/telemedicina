<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    protected $table = 'historial_medicos';
    protected $fillable = [
        'paciente_id',
        'resumen',
        'archivo',
    ];

    public function paciente()
    {
        return $this->belongsTo(User::class, 'paciente_id');
    }
}
