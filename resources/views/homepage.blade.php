<x-main>


    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">IL LIBRROOO DI MACCIOO</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Scegli ,compra , crea</h2>
                    @auth
                    <p class="text-white">Benvenuto, {{ Auth::user()->name }}</p>
                        
                    @endauth
                    @guest
                        
                    <a class="btn btn-primary" href="{{route('login')}}">Entra</a>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Libreria</h2>
                        <p class="card-text">Qui trovi l'elenco completo di tutti i libri inseriti nel database</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm submit" href="{{ route('index')}}">Entra</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Autori</h2>
                        <p class="card-text">Tutti gli autori che hanno contribuito con le loro opere</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Entra</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card Three</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Entra</a></div>
                </div>
            </div>
        </div>
        {{-- <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    
                </div>
            </div>
            
        </div> --}}
    </section>

</x-main>
