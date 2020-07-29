<!--  <img src="{{ asset('img/logo.png') }}" class="image-responsive" width="90px" height="90px"/>  -->
@extends('layouts.app')
@section('content')
</head>
<!-- Page Preloder -->
  <div id="preloder">
            <div class="loader"></div>
        </div>
            
<div class="pt-5">
    <h2 class="text-center mb-5"><strong>Proveedores</strong> </h2>
</div>

<div class="container">
    <table class="table table-light" id="myTable">
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
            @foreach($proveedores as $proveedor)
            <tr>
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->pagina_web}}</td>
                <td>{{$proveedor->correo_electronico}}</td>
                <td>{{$proveedor->pais}}</td>
                <td>{{$proveedor->asociacion}}</td>
                <td>{{$proveedor->telefono}}</td>
                <td>{{$proveedor->miembros}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection