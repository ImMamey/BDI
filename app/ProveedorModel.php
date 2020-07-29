<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorModel extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'pagina_web',
        'correo_electronico',
        'fk_pais_id',
        'fk_asociacion_nacional_id'
    ];
    protected $table = 'vlm_proveedores';

    

}
