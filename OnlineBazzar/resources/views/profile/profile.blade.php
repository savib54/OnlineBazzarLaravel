<div class="row justify-content-center">
            
<a href="{{ url('/createForm') }}" class="btn btn-success" role="button">Create new</a>
</div><br><br>
<div class="row justify-content-center ">

  <form class="example " action="/search">
    <input type="text" placeholder="Search for your item..." id='query' name="query">  
  </form>
  </div>

  
  <h1>Your Products</h1>
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
        <a class="btn btn-primary" href="/edit/{{$k['id']}}" role="button">Edit</a>
        <a class="btn btn-primary" href="/delete/{{$k['id']}}" role="button">Delete</a>
</div></div>
@endforeach
</div>

  


    @include('includes.footer')