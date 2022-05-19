
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1437aa;">
    <div class="container">
        <div class="container"> 
        
            <a href="#" class="text-decoration-none">
                <img src="{{ asset('asset/frontend/images/logo.png') }}" alt="logo_mentawai" 
                style="height:50px; widht:30px;"
                >
                <span class="navbar-brand mb-0 h1">  Dinas Pariwisata Mentawai   </span>
            </a>
        </div>
        <button
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        class="navbar-toggler"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" 
                    href="/">
                    Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" 
                    href="/profil"
                    >Profil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="/wisata_user">Tourism</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="/kuliner_user">Restaurant</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="/penginapan_user">Resort</a>
                </li>       
                <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                          </a>
                       </li>
                       
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      
                    </ul> --}}
                </li>
            </ul>
           
        </div>
    </div>
</nav>
<br>