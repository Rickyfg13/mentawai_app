<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('includes.style')
</head>
<body>
  
   
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1437aa;">
            <div class="container">
                <a class="navbar-brand" href="#">
                  <img src="{{ asset('asset/frontend/images/logo.png') }}" alt="logo_mentawai" 
                  style="height:50px; widht:30px;"
                  >
                    Dinas kepulauan Mentawai
                </a>
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
                       
                       @include('includes.navbar')

                      
                    </ul>
                </div>
            </div>
        </nav>
        @include('includes.caresoul')
        <main class="py-4">
         @yield('content')
        </main>
    </div>
    
</body>

@include('includes.footer')
@include('includes.script')
@stack('addon-script')
</html>


