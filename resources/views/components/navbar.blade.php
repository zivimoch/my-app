<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($navbar as $name => $url)
                <li class="nav-item">
                    <a class="nav-link" href="{{$url}}">{{$name}}</a>
                </li>
                @endforeach
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown ">
                    @auth {{-- @if(Auth::check()) --}}
                    {{-- kalo misalnya if anda adalah orang yg belum login (tamu), maka @auth diganti dengan @guest (liat yang bawah) --}}
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    @endauth {{-- @endif --}}
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @guest
                        <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        @else
                        <form action="logout" method="post">
                            @csrf
                            <li><input type="submit" value="Logout"></li>
                        </form>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
