<!--  <img src="{{ asset('img/logo.png') }}" class="image-responsive" width="90px" height="90px"/>  -->
@extends('layouts.app')
@section('content')
</head>
<!-- Page Preloder -->
  <div id="preloder">
            <div class="loader"></div>
 </div>
            
<div class="pt-5">
    <h2 class="text-center mb-5"><strong>Evaluaciones</strong> </h2>
</div>
<!-- forms -->

<form>


    <div class="container">
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-secondary">Crear</button>
            <div class="col-sm-12 col-md-4 pl-1">
                <select class="form-control" id="tipo" name="tipo">
                    <option value="0">Tipo de evaluación</option>
                    <option value="1">Inicial</option>
                    <option value="2">Renovación</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-4 pr-2">
                <div>
                    <label for="nombre"> Nombre Formula </label><br>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br>
                </div>
            </div>
        </div>
    </div>
</form>


<!--codigo viejo, no tocar -->
<!-- dropdown -->

<!--
<form>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-secondary">Buscar</button>
            <div class="col-sm-12 col-md-4 pl-1">
                <select class="form-control" id="evaluacion" name="evaluacion">
                    <option value="0">Tipo de evaluación</option>
                    <option value="1">Inicial</option>
                    <option value="2">Renovación</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-4 pr-2">
                <select class="form-control" id="productor" name="productor">
                    <option value="0">Selecciona Productor</option>
                    @foreach ($productores as $productor)
                    <option value="{{$productor->id}}">{{$productor->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</form>

<div class="container">
    <table class="table table-light" id="myTableNFNS">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Web Page</th>
                <th scope="col">E-Mail</th>
                <th scope="col">País de origen</th>
                <th scope="col">Asociación Nacional</th>
                <th scope="col">Telefono</th>
                <th scope="col">Miembros IFRA</th>
            </tr>
        </thead>

        <tbody>
            @foreach($evaluaciones as $evaluacion)
            <tr>
                <td>{{$evaluacion->nombre}}</td>
                <td>{{$evaluacion->pagina_web}}</td>
                <td>{{$evaluacion->correo_electronico}}</td>
                <td>{{$evaluacion->pais}}</td>
                <td>{{$evaluacion->asociacion}}</td>
                <td>{{$evaluacion->telefono}}</td>
                <td>{{$evaluacion->miembros}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
-->
@endsection