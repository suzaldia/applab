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
    @include('web.partials.styles')
</head>
<body>
    <div id="app">


        <div id="app" class="bg">
            <body>
                <div class="container">
                  <div class="flex-center full-height">
                      @include('web.partials.navbar')
                      <div class="content py-3">
                          <main class="py-4">
                              @yield('content')
                          </main>
                      </div>
                  </div>
                </div>
            </body>
          </div>
</html>
