<!-- Header -->
<header class="header">
    <div class="sticky">
      <div class="container">
        <div class="logo"> <a href="{!! asset('index.html') !!}">
        <img src="{!! asset('images/logo.png') !!}" alt="" style="margin-left: -50px;"></a> </div>
        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li><a class="border-center" href="{!! asset('lugoIndex') !!}">inicio </a>
            </li>
            <li><a href="{!! asset('biografia') !!}">biografía </a> </li>
            
            @auth
            <li><a href="{!! asset('adminMain') !!}">Admin index </a> </li>
            <li><a href="{!! asset('logout') !!}" 
              style="text-align: center; margin-top: -20px;">{{ $usuario->username }}
              <br />cerrar sesión</a> </li>
            @else
              <li><a href="{!! asset('login') !!}">inicia sesión</a> </li>
            @endauth
          </ul>
        </nav>
        <ul class="social">
          <li><a href="#."><i class="fa fa-facebook"></i></a></li>
          <li><a href="#."><i class="fa fa-spotify"></i></a></li>
          <li><a href="#."><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </header>
  <!-- End Header -->