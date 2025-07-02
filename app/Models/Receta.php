<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'consulta_id',
        'medicamento',
        'dosis',
        'indicaciones',
    ];

    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }
}
