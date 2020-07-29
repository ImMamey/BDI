@extends('layouts.app')
@section('content')
!-- Page Preloder -->
  <div id="preloder">
            <div class="loader"></div>
 </div>
            
<div class="pt-5">
    <h2 class="text-center mb-5"><strong>Crear Formula</strong> </h2>
</div>
<!-- forms -->
<form>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-secondary">Crear</button>
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
            <div class="col-sm-12 col-md-4 pr-2">
                <div>
                    <label for="fname"> Ponderación </label><br>
                    <input type="text" id="fname" name="fname" placeholder="Nombre"><br>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection