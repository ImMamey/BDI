<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaPrimaModel extends Model
{
    protected $fillable = [
        'ipc',
        'nombre',
        'descripcion_visual',
        'tipo',
        'proceso',
        'descripcion_proceso',
        'tsca_cas',
        'solubilidad',
        'vigencia',
        'fk_proveedor_id'
    ];
    protected $table = 'vlm_materia_prima_esencias';
}
