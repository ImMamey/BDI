<?php

namespace App\Http\Controllers;
use DB;
use App\ProveedorModel;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        $proveedores = DB::select(" SELECT p.nombre, p.pagina_web, p.correo_electronico,
         pa.nombre as pais,
         a.nombre as asociacion,
         '+' || b.cod_pais || '-' || b.cod_area || b.numero as telefono,
         c.tipo as miembros
        FROM vlm_proveedores p
        JOIN vlm_paises pa ON pa.id = p.fk_pais_id
        LEFT JOIN vlm_asociaciones_nacionales a ON a.id = p.fk_asociacion_nacional_id
        JOIN vlm_telefonos b ON b.fk_proveedor = p.id
        JOIN vlm_miembros_ifra c ON c.fk_proveedor_id =p.id
        WHERE c.fecha_f IS NULL"
        ); //Revisar vlm_telefonos y miembros ifra 
        return view('Proveedores',compact('proveedores'));
    }
}
