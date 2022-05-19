<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/styles/css/main1.css') }}">  
    <link rel="stylesheet" href="{{ asset('asset/frontend/styles/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
    @include('includes.navbar')
    <hr>
    
   
    {{-- @include('includes.sidebar') --}}
    @yield('content')
    @stack('addon-style')
   @include('includes.footer')
   @include('includes.script')
   @stack('addon-script')
</body>
</html>