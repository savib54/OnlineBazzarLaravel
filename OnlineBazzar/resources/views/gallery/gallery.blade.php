<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
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
            .gallery
{
    display: inline-block;
    margin-top: 20px;
}
.pic{
    width:200px;
    height:200px;

}
        </style>
@include('includes.navbar')
<!-- @foreach($data as $k)
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="view overlay z-depth-1-half">
    <img src="assets/upload/{{$k['upload']}}"  height="200px" width="400px"/><br/>
</div>
 
</div>
@endforeach --><div class="pic">
<div class="container">
	<div class="row">
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
            @foreach($data as $k)
                    <a class="thumbnail fancybox" target="_blank" rel="ligthbox" href="assets/upload/{{$k['upload']}}">
                    <img class="img-responsive" alt="" src="assets/upload/{{$k['upload']}}" height="400px" width="700px" />
                    <div class='text-right'>
                        <small class='text-muted'>{{$k['product_name']}}</small>
                    </div> <!-- text-right / end -->
                </a>
                @endforeach 
            </div> 
        </div>
    </div>
</div>
    
    @include('includes.footer')