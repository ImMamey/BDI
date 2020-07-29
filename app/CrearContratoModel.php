<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrearContratoModel extends Model
{
    protected $fillable = [
        'id',
        'fecha_de_emision',
        'exclusividad',
        'fecha_cancelada',
        'motivo',
        'fk_proveedor',
        'fk_productor'
    ];
    protected $table = 'vlm_contratos';
}
