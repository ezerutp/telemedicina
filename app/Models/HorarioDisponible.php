<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorarioDisponible extends Model
{
    protected $table = 'horario_disponibles';
    protected $fillable = [
        'doctor_id',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
    ];
    
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
