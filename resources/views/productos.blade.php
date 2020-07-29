<!--  <img src="{{ asset('img/logo.png') }}" class="image-responsive" width="90px" height="90px"/>  -->
@extends('layouts.app')
@section('content')
   <style>
    html, body {
        background-color: #636b6f;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>


    <div class="pt-5 pl-5">
        <span>
            <a href="./index.html" class="primary-btn">asdfadf</a> 
            <a href="./index.html" class="primary-btn">asdfasdf</a> 
        </span>
    </div>

        <div class="content">
               
           <div class="limiter">
               <div class="pt-5">
           
               <table class="table table-dark">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">Descripción Visual</th>
                       <th scope="col">Tipo</th>
                       <th scope="col">Proceso</th>
                       <th scope="col">Descripción del Proceso</th>
                       <th scope="col">CAS</th>
                       <th scope="col">Solubilidad</th>
                       <th scope="col">Vigencia</th>
                       <th scope="col">Otros Ingredentes</th>
                       <th scope="col">Proveedor</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <th scope="row">1</th>
                       <td>Palito verde</td>
                       <td>Bastante verde</td>
                       <td>planta</td>
                       <td>descomposición</td>
                       <td>se descompone</td>
                       <td>2545</td>
                       <td>1%</td>
                       <td>21 Jul</td>
                       <td>algunas larvas</td>
                       <td>Pinto</td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>Palito azul</td>
                        <td>Bastante azul</td>
                        <td>planta</td>
                        <td>descomposición</td>
                        <td>no se descompone</td>
                        <td>2545</td>
                        <td>1%</td>
                        <td>30 Jul</td>
                        <td>algunas moscas</td>
                        <td>Moises</td>
                     </tr>
                     <tr>
                        <th scope="row">3</th>
                        <td>Palito morado</td>
                        <td>Bastante morado</td>
                        <td>planta</td>
                        <td>descomposición</td>
                        <td>destilación</td>
                        <td>0000</td>
                        <td>1%</td>
                        <td>30 Dec</td>
                        <td>algunos gusanos</td>
                        <td>Victor</td>
                     </tr>
                   </tbody>
                 </table>
               </div>
   </div>


               </div>
           </div>
       </div>
@endsection
