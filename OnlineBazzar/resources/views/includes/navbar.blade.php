<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" box-shadow:0 1px 3px #000; background-color: #E8E8E8 !important; color: #fff !important;">
  <a class="navbar-brand" href="{{ url('/') }}">Online Bazzar</a>
  <button class="navbar-toggler" type="button" style=" box-shadow:0 10px 30px #000; !important" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery') }}">Gallery<span class="sr-only">(current)</span></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li>
  <form class="example " action="/search">
    <input type="text" placeholder="Search " id='query' name="query"        border-radius: 20px;>  
  </form>
  <!-- <input type="text" name="search" placeholder="Search.."> -->

<!-- <form class="form-inline md-form form-sm mt-0">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
    <i class="fas fa-search" aria-hidden="true"></i>
</form> -->
      </li>
      <li>
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
            @endif
            </li>
    </ul>
    
  </div>
           
</nav>

