<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AppLAB') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('dashboard.partials.styles')


</head>
  <div id="app" class="bg">
    <body>
        <div class="container">
        <div class="flex-center full-height">
            <!-- Navbar -->
            <div class="row justify-content-md-center">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            {{ config('app.name', 'Applab') }}
                            <span class="sr-only">(current)</span>
                          </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Support</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="content py-5">
                <div class="title">
                    AppLAB
                    <h3>Management processes chemical plant</h3>
                </div>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
      </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
  </div>
</html>