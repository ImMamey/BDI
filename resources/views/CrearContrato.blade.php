<!--  <img src="{{ asset('img/logo.png') }}" class="image-responsive" width="90px" height="90px"/>  -->
@extends('layouts.app')
@section('content')
</head>
<!-- Page Preloder -->
<!--  <div id="preloder">
            <div class="loader"></div>
        </div>
            -->
<div class="pt-5">
    <h2 class="text-center mb-5"><strong>Crear Contrato</strong> </h2>
</div>
<!-- dropdown -->
<form>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-secondary">Buscar</button>
            <div class="col-sm-12 col-md-4 pl-1">
                <select class="form-control" id="proveedores" name="proveedores">
                    @foreach ($proveedores as $provedor)
                      <option value="">{{$provedor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12 col-md-4 pr-2">
                <select class="form-control" id="productor" name="productor">
                    <option value="0">Selecciona Productor</option>
                    @foreach ($productores as $productor)
                    <option value="">{{$productor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12 col-md-4 pr-2">
                <select class="form-control" id="productor" name="productor">
                    <option value="0">Selecciona Productor</option>
                    @foreach ($productores as $productor)
                    <option value="">{{$productor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12 col-md-4 pr-2">
                <select class="form-control" id="productor" name="productor">
                    <option value="0">Selecciona Productor</option>
                    @foreach ($productores as $productor)
                    <option value="">{{$productor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-12 col-md-4 pr-2">
                <select class="form-control" id="productor" name="productor">
                    <option value="0">Selecciona Productor</option>
                    @foreach ($productores as $productor)
                    <option value="">{{$productor->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>


</form>

<!-- =======================Tabla 1===========================-->

<h1 class="text-center mb-5"><strong>Condiciones de pago</strong> </h1>

<!-- =======================Tabla 2===========================-->
<h1 class="text-center mb-5"><strong>Condiciones de envio</strong> </h1>

<!-- =======================Tabla 3===========================-->
<h1 class="text-center mb-5"><strong>Materia Prima</strong> </h1>

<!-- =========================================================-->
@endsection