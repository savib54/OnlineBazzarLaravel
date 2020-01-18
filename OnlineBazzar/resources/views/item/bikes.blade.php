<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OnlineBazzar</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            

            
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
    <body>
    @include('includes.navbar')
   
<div class="row">
  <div class="col-1.">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action " id="list-car-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Car</a>
      <a class="list-group-item list-group-item-action" id="list-mobile-list" data-toggle="list" href="{{ route('mobile') }}" role="tab" >Mobile</a>
      <a class="list-group-item list-group-item-action active" id="list-bike-list" data-toggle="list" href="{{ route('bikes') }}" role="tab" >Bikes</a>
      <a class="list-group-item list-group-item-action" id="list-watch-list" data-toggle="list" href="{{ route('watch') }}" role="tab" >Watch</a>
      <a class="list-group-item list-group-item-action" id="list-furniture-list" data-toggle="list" href="{{ route('furniture') }}" role="tab" >Furniture</a>
      <a class="list-group-item list-group-item-action" id="list-house-list" data-toggle="list" href="{{ route('house') }}" role="tab" >House</a>
     
    </div>
  </div>
  <div class="right_container">
@foreach($data as $k)
@if($k['category']=='Bikes')
<div class="shadow p-3 mb-5 bg-white rounded">
    <div class="outside">

        <div class="view overlay z-depth-1-half">
            <img src="assets/upload/{{$k['upload']}}" float:right !important; height="400px" width="600px"/><br/>
         </div>
    
    <div class="inside">
        <h4>Product name</h4>{{$k['product_name']}}<br/>
        <h4>Detail</h4>{{$k['detail']}}<br/>
        <h4>Price</h4>{{$k['price']}}<br/>
        <h4>Phone Number</h4>{{$k['phone_number']}}<br/>
  </div>
</div></div>
@endif
@endforeach
</div>

  </div>


    
    @include('includes.footer')

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

             
            </div> -->
        </div>
    </body>
</html>
