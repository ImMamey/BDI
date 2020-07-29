<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondicionEnvioModel extends Model
{
    protected $fillable = [
        'id',
        'transporte',
        'costo',
        'descripcion',
        'fk_proveedor',
        'fk_pais'
    ];
    protected $table = 'vlm_condicion_envios';
}
