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
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("post") }}">Sample Post</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route("contact") }}">Contact</a>
                    </li>
                    </li class="nav-item">
                    {{-- <a type="button" class="btn btn-outline-light navigation--button" href="{{route( "
                        logout")}}">LogOut</a> --}}
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <li class="nav-item"><button type="submit" class="nav-link px-lg-3 py-3 py-lg-4">Logout</button></li>
                        {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> --}}
                       
                    </form>
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