<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoNotificacion extends Model
{
    protected $table = 'tipo_notificacions';
    protected $fillable = ['nombre', 'descripcion'];

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class);
    }
    
    /**
     * (Opcional) Constantes o helpers para evitar “strings mágicos”.
     */
    public const EMAIL = 1;
    public const SMS = 2;
    public const PUSH = 3;

    /**
     * (Opcional) Helper para filtrar por tipo.
     */
    public function scopeEmail($query)
    {
        return $query->where('id', self::EMAIL);
    }
}
