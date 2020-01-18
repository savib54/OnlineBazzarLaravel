
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    @include('includes.navbar')
<br/><br/><style>
            

            
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
    <style>
    .form-group{
      margin: 0 auto !important;
    }
    </style>
    <form method="post" action="/register/store">
@csrf
<div class="form-group col-md-6 col-md-offset-6">
<select class="category" name="category">
    <option selected>Choose...</option>
    <option value="Car">Car</option>
    <option value="Mobile">Mobile</option>
    <option value="Bikes">Bikes</option>
    <option value="Watch">Watch</option>
    <option value="Furniture">Furniture</option>
    <option value="House">House</option>    

  </select>

  </div>
  <div class="form-group col-md-6 col-md-offset-6">
    <label for="formGroupExampleInput1">Product name</label>
    <input type="text" class="form-control" name="product_name" placeholder="Product name">
  </div>


  
  <div class="form-group col-md-6 col-md-offset-6">
    <label for="formGroupExampleInput2">Description</label>
    <textarea  class="form-control" name="detail" placeholder="Detail"></textarea>
  </div>
  <div class="form-group col-md-6 col-md-offset-6">
    <label for="formGroupExampleInput3">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Price">
  </div>
  <div class="form-group col-md-6 col-md-offset-6">
    <label for="formGroupExampleInput3">Phone number</label>
    <input type="text" class="form-control" name="phone_number" placeholder="phone number">
  </div>
  <div class="form-group col-md-6 col-md-offset-6">
    <label for="formGroupExampleInput4">Upload Image</label>
    <input type="file" class="form-control" name="upload" id="upload" placeholder="upload">
  </div>
  <div class="form-group col-md-6 col-md-offset-6">
    <input type="submit" class="form-control"  >
    <input type="reset" class="form-control"  >

  </div>
</form>