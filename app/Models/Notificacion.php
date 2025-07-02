<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $fillable = [
        'user_id',
        'tipo_notificacion_id',
        'asunto',
        'cuerpo',
        'leido_en',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoNotificacion::class, 'tipo_notificacion_id');
    }
}
