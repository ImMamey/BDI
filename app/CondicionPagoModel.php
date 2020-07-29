<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondicionPagoModel extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'tipo',
        'cuotas',
        'porcentaje_cuotas',
        'meses',
        'fk_proveedor'
    ];
    protected $table = 'vlm_condiciones_de_pago';
}
