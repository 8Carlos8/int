<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartelera extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_evento',
        'id_sala',
        'estado',
        'inicio',
        'fin'
    ];


    public function Evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }

    public function Sala()
    {
        return $this->belongsTo(Sala::class, 'id_sala');
    }
}
