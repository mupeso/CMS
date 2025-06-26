<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route("home") }}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("home") }}">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("about") }}">About</a></li>

                @auth
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("article.Show") }}">Articles</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("contact") }}">Contact</a>
                    </li>
                    </li class="nav-item">
                   
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <li class="nav-item"><button type="submit" class="btn btn-success">Logout</button></li>
                       
                    </form>
                    <li><a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a> </li>

                @else
                   <li class="nav-item"> <a type="button" class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("login") }}">login</a></li>
                   @if (Route::has('register'))
                      <li class="nav-item"><a type="button" class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ route("register") }}">register</a></li>
                    @endif    
                @endauth

            </ul>
        </div>
    </div>
</nav>