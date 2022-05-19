<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Success Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/frontend/styles/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>

    <div class="div container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white" style="margin-right:43rem;">
           <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
               <a href="index.html" class="navbar-brand">
                   <img src="{{ asset('asset/frontend/images/logo.png') }}" 
                   style="
                   height:50px; 
                   widht:30px;
                     margin-left:35rem;
                   
                   ">
               </a>
           </div>
           <ul class="navbar-nav mr-auto d-none d-lg-block">
               <li>
                   <span class="text-muted">
                       | &nbsp; Beyond the explorer of Mentawai
                   </span>
               </li>
           </ul>
        </nav>
    </div>


    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ asset('asset/frontend/ic_mail.jpg') }}" alt=""/>
                <h1>Yay! Success</h1>
                <p>
                    We've sent you message on your number for the instruction
                    <br>
                    please read it as well
                </p>
                <a href="/" class="btn btn-primary mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>

</body>
    
@include('includes.script')
@stack('addon-script')
