<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class ProductorModel extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'pagina_web',
        'fk_asociacion_nacional',
        'correo_electronico'
    ];
    protected $table = 'vlm_productores';
}
