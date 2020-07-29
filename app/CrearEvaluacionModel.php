<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrearEvaluacionModel extends Model
{
    protected $fillable = [
      'fecha_i',
      'ponderacion',
      'nombre',
      'tipo_formula',
      'fecha_f',
      'fk_productor',
      'fk_formula_criterios'
    ];
    protected $table = 'vlm_criterio_evaluaciones';
    public $timestamps = false; 
}
