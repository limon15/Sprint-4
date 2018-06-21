<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'FarmaciaDeTurno' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div>
                  <img src="../../../public/images/logo-farmacia.png" width="150" alt="">
                </div>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'FARMACIA DE TURNO' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="">
          <div class="wrap">
          <h2 class="FAQS">Preguntas frecuentes</h2>
          <details>
            <summary>¿Qué información puedo obtener en esta web?</summary>
            <p>En nuestra web podrás:
              <ul class="listaFAQ">
                <li><strong>Localizar las farmacias de turno más cercanas</strong> a tu domicilio.</li>
                <li>Obtener ubicación, teléfono y otros <strong>datos útiles de las farmacias que buscas</strong>.</li>
                <li><strong>Compartir por redes sociales o Whatsapp</strong> la información que buscaste.</li>
                <li><strong>Guardar las farmacias que buscaste</strong> para obtener rápidamente su información desde tu perfil. También vas a poder marcarlas como "Visitada".</li>
                <li><strong>Hacer tu propia valoración de la farmacia que visitaste</strong> y ver cómo la puntúan otros usuarios.</li>
                <li>Subscribirte a nuestro newsletter y <strong>recibir ofertas especiales de farmacias de tu zona</strong>.</li>
                <li>Consultar <strong>información de entidades sanitarias</strong>.</li>
              </ul></p>
          </details>
          <details>
             <summary>¿Cómo localizo la farmacia de turno más cercana a mi domicilio?</summary>
             <p>Ingresá a nuestra web<a href="https://www.farmaciasdeturno.com/">Farmacias de Turno.</a><br>Aplicá los prefiltros necesarios, podrás buscar por nombre de farmacia y/o zona.</p>
          </details>
          <details>
             <summary>¿Cómo puntúo una farmacia?</summary>
             <p>Antes que nada <a href="https://www.farmaciasdeturno.com/login.html">iniciá sesión o registrate.</a>Sólo los usuarios registrados podrán puntuar una farmacia.
               Para poder valorar una farmacia tendrás que previamente buscarla y marcarla como "VISITADA", luego podrás valorarla con una puntuación de 1 a 5 estrellas y si querés, agregar un comentario sobre tu experiencia.</p>
          </details>
          <details>
             <summary>¿Cómo puedo acceder fácilmente a descuentos y ofertas de farmacias cercanas?</summary>
             <p>¡Muy fácil! Subscribite a nuestro<a href="https://www.farmaciasdeturno.com/login.html">newsletter</a>y vas a estar recibiendo ofertas y descuentos en tu zona ¡Especiales para vos ♥!</p>
          </details>
        <div class="image-bottom">
            <h3>¿Dudas, quejas, recomendaciones?<br> Contactanos a través de nuestro formulario.</h3>
        </div>
        </div>
      </div>

    </div>
</body>
</html>
