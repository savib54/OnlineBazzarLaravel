<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User</th>
      <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
      <th scope="col">Delete</th>
      </thead>
    </tr>
  </thead>
  <tbody>
  @foreach($user as $k)
    <tr>
    <td>{{$k['id']}}</td><td>{{$k['name']}}</td><td>{{$k['email']}}</td>
      <td><a class="btn btn-primary" href="/delete/{{$k['id']}}" role="button">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Post</th>
      <thead>
        <th>id</th>
        <th>category</th>
        <th>Product name</th>
        <th>Detail</th>
        <th>Price</th>
        <th>Phone</th>
        <th>Confirmation</th>
      <th scope="col">Delete</th>
      </thead>
    </tr>
  </thead>
  <tbody>
  @foreach($post as $l)

    <tr>
    <td>{{$l['id']}}</td><td>{{$l['category']}}</td><td>{{$l['product_name']}}</td><td>{{$l['detail']}}</td><td>{{$l['price']}}</td><td>{{$l['phone_number']}}</td>
    <td><a class="btn btn-primary" href="/edit/{{$l['id']}}" role="button">Confirm</a>
        </td>    
      <td><a class="btn btn-primary" href="/delete/{{$l['id']}}" role="button">Delete</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</body> 
</html>