<?php

namespace App\Http\Controllers;
use DB;
use Log;
use Illuminate\Http\Request;
use App\ProductorModel;
use App\EvaluacionesModel;


class EvaluacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // if(($request->tipo !=0)&&($request->nombre != null))
       // {
        //$evaluacion = new evaluacionesController();
        $evaluacion = new EvaluacionesModel();
        print($request->nombre);
        $evaluacion->id = DB::raw("nextval('formula_id_seq')");
        $evaluacion->nombre=$request->input('nombre');
        $evaluacion->tipo=$request->input('tipo');
        $evaluacion->save();
        return redirect()->action('EvaluacionesController@index');
        
       // }
        //codigo JQuery
        //$evaluacion = $("#evaluacion").val();



        /*Codigo aanterior trifasico de sabrina */
       /* $productores = ProductorModel::all();
        
        if ($request->evaluacion != 0 && $request->productor != 0){
            $evaluaciones = DB::SELECT("SELECT DISTINCT p.nombre, p.pagina_web, p.correo_electronico,
            pa.nombre as pais,
            a.nombre as asociacion,
            '+' || b.cod_pais || '-' || b.cod_area || b.numero as telefono,
            c.tipo as miembros
            FROM vlm_proveedores p
            JOIN (
				SELECT DISTINCT pi.fk_productor, ce.fk_proveedor FROM vlm_pide pi
                JOIN vlm_condicion_envios ce ON ce.fk_pais = pi.fk_pais 
				WHERE pi.fk_productor = '$request->productor'
			) pr
            ON pr.fk_proveedor = p.id
            LEFT JOIN vlm_asociaciones_nacionales a ON a.id = p.fk_asociacion_nacional_id
            JOIN vlm_miembros_ifra c ON c.fk_proveedor_id = p.id
            JOIN vlm_miembros_ifra cp ON cp.fk_productor_id = pr.fk_productor
            JOIN vlm_paises pa ON pa.id = p.fk_pais_id
            JOIN vlm_telefonos b ON b.fk_proveedor = p.id
            ");        
        }
        else {
            $evaluaciones = DB::select(" SELECT p.nombre, p.pagina_web, p.correo_electronico,
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
            ); 
                
        }
        return view ('evaluaciones')->with(['evaluaciones'=>$evaluaciones, 'productores'=>$productores]);    
        */
    }

    public function filtro(Request $request)
    {   
    }

    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluaciones');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        /*
        $evaluacion = new EvaluacionesModel();
        $evaluacion ->id = DB::raw("nextval('formula_id_seq')");
        $evaluacion->nombre=$request->input('nombre');
        $evaluacion->tipo=$request->input('tipo');
        $evaluacion->save();
        return redirect()->action('EvaluacionesController@index');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
