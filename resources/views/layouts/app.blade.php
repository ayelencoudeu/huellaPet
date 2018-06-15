<!doctype html>
<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8">
    <meta lang="es">
    <meta name="author" content="DH, Coudeu, Baier, Gaab, Ojeda">
    <meta name="description" content="Huella Pet es tu Pet Shop amigo y lo mejor es que Online, no tenes que salir de tu casa, comprá lo que necesitas cuando queres.">
    <meta name="keywords" content="Huella Pet, pet shop, online, mascota, alimentos, perro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Huella Pet</title>

    
     
    
      
      <link rel="stylesheet" type="text/css" href="{{ asset('css/huellacss.css')}}">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  </head>
<!-- Encabezado -->
<body>
    <div class="container">
        <div class="datosarribacontacto">
            <div class="dtc">
                <img src="{{ asset('images/iconoemail.png') }}" alt="email"><p>ventas@huellapet.com</p>
            </div>
            <div class="dtc">
                <img src="{{ asset('images/iconowatsap.png') }}" alt="telefono"><p>(011)1548352738</p>
            </div>
        </div>
        <div class="encabezado" id="alturaencabezado">
            @guest 
                <div class='cont-reg-carr'>
                  <nav class='nav-reg'>
                    <ul>
                      <li><a href="{{ route('login') }}">{{ __('Ingresa') }}</a></li>
                      <li><a href="{{ route('register') }}">{{ __('Registrate') }}</a></li>
                    </ul>
                  </nav>
                  <div class='carrito'>
                  <img src="{{ asset('images/carrito.png') }}" alt='carrito'><p>Carrito: Vacio</p>
                  </div>
                </div>
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->imagen->image }} <span class="caret"></span>
                </a>
               </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->nombre }} <span class="caret"></span>
                </a>
               </li>
               <li><a href="{{ route('modificarDatos') }}">Datos</a></li>
              <li> 
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  {{ __('Salir') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
                </div>
              </li>
            @endguest
            <div class="logo">
              <img src="{{ asset('images/logo.png') }}">
            </div>
            <nav class="navegadorprincipal">
                <ul>
                  <li><a href="{{ route('home') }}">{{ __('Inicio') }}</a></li>
                  <li><a href="./nosotros.php">Nosotros</a></li>
                  <li><a href="#productos">Tienda</a></li>
                  <li><a href="./faqs.php">Preguntas</a></li>
                  <li><a href="#contacto">Contacto</a></li>

                </ul>
            </nav>
            <nav class="navegadorprincipalmobile">
                        <div class="dropdown">
                            <button class="dropbtn" onclick="desplegar(this)"><img src="{{ asset('images/logoMenu.png') }}"></button>
                            <div class="dropdown-content">
                              <a href="{{ route('home') }}">Inicio</a>
                                <a href="./nosotros.php">Nosotros</a>
                                <a href="./index.php">Tienda</a>
                                <a href="./faqs.php">Preguntas</a>
                                <a href="./index.php">Contacto</a>
                            </div>
                        </div>
            </nav>
          </div>  
       
    </div>
    <div>
        @yield('registro')    
    </div>
     <div>
        @yield('modificar')
    </div>
     <div>
        @yield('login')
    </div>
    <div>
        @yield('home')
    </div>
  

    

<!-- Footer
    <footer>
      <div class="seguinos">
          <ul>
            <li><a href="http://facebook.com" target="new"><img src="images/fb.png" alt="Facebook"></a></li>
            <li><a href="http://twitter.com" target="new"><img src="images/tw.png" alt="Twitter"></a></li>
            <li><a href="http://instagram.com" target="new"><img src="images/it.png" alt="Instagram"></a></li>
            </ul>
        </div> -->
        <div class="seguinos">
            <p class="legales2">Copy right Lorem ipsum dolor sit amet.</p>
        </div>
    </footer>
</body>

    <script type="text/javascript">
    function desplegar(alturaencabezado){
    var obj = document.getElementById('alturaencabezado'); 
    obj.style.height = "380px";

    }
    function contraer(alturaencabezado){
    var obj = document.getElementById('alturaencabezado'); 
    obj.style.height = "400px";

    }

    </script>
</html>


<!-- Right Side Of Navbar 
                    <ul class="navbar-nav ml-auto">
                         Authentication Links 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> -->
                