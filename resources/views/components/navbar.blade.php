
    <nav class="navbar navbar-expand-lg  fixed-top bg-dark" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="{{route('homepage')}}">IL LIBBRROO</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item "><a class="nav-link text-white" href="{{ route('login')}}">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('register')}}">REGISTRATI</a></li>
                        
                    @endguest
                    @auth
                    <form action="{{ route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-danger mx-2" type="submit">Logout</button>
                    </form>
                        
                    @endauth
                    
                </ul>
            </div>
        </div>
    </nav>
