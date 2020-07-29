<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionesModel extends Model
{
    protected $fillable = [
        'id',
        'tipo',
        'nombre',
        'descripcion'
      ];
      protected $table = 'vlm_formula_criterio';
      public $timestamps = false; 



    /*
    protected $fillable = [
        'id',
        'nombre',
        'pagina_web',
        'correo_electronico',
        'fk_pais_id',
        'fk_asociacion_nacional_id'
    ];
    protected $table = 'vlm_proveedores';
 */
}
