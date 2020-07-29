<!--  <img src="{{ asset('img/logo.png') }}" class="image-responsive" width="90px" height="90px"/>  -->
@extends('layouts.app')
@section('content')

        <style>
            html, body {
                background: #fff;
                color: #191919;
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



    </head>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
            
       
    <body>
        <div class="pt-5"><h2 class="text-center"><strong>$Productores</strong> </h2></div>
    
            <div class="pl-5">
            <div class="pl-5">
                <div class="pt-5 pl-5">
                

              <div class="container pl-5">
                <div class="row pl-5">
                <table class="table table-light" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">pinto e gei</th>
                        <th scope="col">pinto e gei</th>
                        <th scope="col">pinto e gei</th>
                        <th scope="col">pinto e gei</th>
                        <th scope="col">pinto e gei</th>
                      </tr>
                    </thead>

                     <tbody>
                      @foreach($proveedores as $proveedor)
                         <tr>
                             
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                             
                         </tr>
                    @endforeach 
                    </tbody>
                  </table>
                  </div>
              </div>
                </div>
	        </div>


                </div>
            </div>
        </div>
@endsection