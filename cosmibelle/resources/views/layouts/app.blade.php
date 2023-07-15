<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      body {
          background-image: url('{{ asset('images/fleurbg.png') }}');
      }
      </style>
</head>
<body>
    <div id="app">
        <nav style="background-color: #FFCFF4" class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
              <img src="{{ asset('images/logo.png') }}" alt="Your Image">
                <a href="{{url('produit')}} " class="m-3">produit</a>
                <a href="{{url('contact')}} " class="m-3">contact</a>
                <a href="{{url('index')}} " class="m-3">index</a>
                <a href="{{url('categorie')}}">categorie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registere') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    </div>
    <footer style="background-color: rgb(254, 184, 254)"  class="text-center text-lg-start text-muted">
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row m-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold m-4"> à propos 
              </h6>
              <h4><i> Don’t Miss Out</i></h4>
                <i class="fas fa-gem"></i><img src="{{ asset('images/logo.png') }}" alt="Your Image"></h6>
              <p style="font-size:15px" class="text-justify ">Un site de cosmétiques se spécialise dans la vente et 
                la promotion de produits de beauté et de soins entièrement composés d'ingrédients naturels.</p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold m-4">Contact</h6>
              <p class="m-4">
                <a href="#!" class="text-reset">Acceuil</a>
              </p>
              <p class="m-4">
                <a href="#!" class="text-reset">Contact</a>
              </p>
              <p class="m-4">
                <a href="#!" class="text-reset">Panier</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold m-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Tangier,Maroc</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                Cosmibelle@gemail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 0634084756</p>
              <p><i class="fas fa-print me-3"></i> + 0681345373</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold m-3">
                Social Media
              </h6>
              <p><i>un site de cosmétiques proposant exclusivement des produits naturels se concentre
                 sur la vente et la promotion de produits de beauté.</i></p>
              <div>
                <img style="width:50px" src="{{ asset('images/instagram.png') }}" alt="Your Image">
                <img style="width:55px" src="{{ asset('images/twitter.png') }}" alt="Your Image">
                <img style="width:30px" src="{{ asset('images/facebook.png') }}" alt="Your Image">
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Projet:
        <a class="text-reset fw-bold" href="">PFE ISMONTIC</a>
      </div>
    </footer>
  </body>
</html>
