
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    @include('includes.navbar')
    
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
    
    

<div class="row">
  <div class="col-1.">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-car-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Car</a>
      <a class="list-group-item list-group-item-action" id="list-mobile-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Mobile</a>
      <a class="list-group-item list-group-item-action" id="list-bike-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Bikes</a>
      <a class="list-group-item list-group-item-action" id="list-watch-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Watch</a>
      <a class="list-group-item list-group-item-action" id="list-furniture-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Furniture</a>
      <a class="list-group-item list-group-item-action" id="list-house-list" data-toggle="list" href="{{ route('car') }}" role="tab" >House</a>
     
    </div>
  </div>
  <div class="right_container">
@foreach($results as $k)
@if($k==""){
  <h1>No Results Found!!</h1>

}
@endif
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
@endforeach

</div>

  </div>

  @include('includes.footer')