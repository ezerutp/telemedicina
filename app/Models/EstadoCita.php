<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCita extends Model
{
    protected $table = 'estado_citas';
    protected $fillable = ['nombre', 'descripcion'];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    /**
     * (Opcional) Constantes o helpers para evitar “strings mágicos”.
     */
    public const PENDIENTE  = 1;
    public const CONFIRMADA = 2;
    public const CANCELADA  = 3;

    /**
     * (Opcional) Helper para filtrar por estado.
     */
    public function scopeConfirmed($query)
    {
        return $query->where('id', self::CONFIRMADA);
    }
}
