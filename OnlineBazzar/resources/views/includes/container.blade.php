
<div class="row">
  <div class="col-1.">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action " id="list-car-list" data-toggle="list" href="{{ route('car') }}" role="tab" >Car</a>
      <a class="list-group-item list-group-item-action" id="list-mobile-list" data-toggle="list" href="{{ route('mobile') }}" role="tab" >Mobile</a>
      <a class="list-group-item list-group-item-action" id="list-bike-list" data-toggle="list" href="{{ route('bikes') }}" role="tab" >Bikes</a>
      <a class="list-group-item list-group-item-action" id="list-watch-list" data-toggle="list" href="{{ route('watch') }}" role="tab" >Watch</a>
      <a class="list-group-item list-group-item-action" id="list-furniture-list" data-toggle="list" href="{{ route('furniture') }}" role="tab" >Furniture</a>
      <a class="list-group-item list-group-item-action" id="list-house-list" data-toggle="list" href="{{ route('house') }}" role="tab" >House</a>
     
    </div>
  </div>
  <div class="right_container">
@foreach($data as $k)

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

