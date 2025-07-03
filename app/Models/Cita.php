<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    protected $fillable = [
        'paciente_id',
        'doctor_id',
        'estado_cita_id',
        'programada_para',
        'motivo',
    ];

    public function paciente()
    {
        return $this->belongsTo(User::class, 'paciente_id');
    }
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    public function estado()
    {
        return $this->belongsTo(EstadoCita::class);
    }
    public function consulta()
    {
        return $this->hasOne(Consulta::class);
    }
}
