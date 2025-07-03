<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';
    protected $fillable = [
        'nombre',
        'codigo_cie10',
        'descripcion',
    ];

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
}
