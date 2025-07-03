<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';
    protected $fillable = [
        'cita_id',
        'diagnostico_id',
        'notas',
        'video_url',
    ];

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }

    public function diagnostico()
    {
        return $this->belongsTo(Diagnostico::class);
    }

    public function receta()
    {
        return $this->hasMany(Receta::class);
    }
}
