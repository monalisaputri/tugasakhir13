<nav class = "navbar navbar-expand-lg navbar-light bg-light">
    <div class = "container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class = "navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toffle navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse" id="navbarSupportedContent">
            <ul class = "navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard-home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard-produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard-kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>
            </ul>
            <form class = "d-flex">
                <input class = "form-control me-2" type = "search" placeholder="Search" aria-label="Search">
                <button class = "btn btn-outline-success" type="submit">Search</button>
            </form>
            <div>
                @guest
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">

                        <button class="btn btn-login my-2 my-sm-0" type="button"
                                onclick="event.preventDefault(); location.href='{{url('login')}}';">
                                Log In
                        </button>
                    </form>
                @endguest

                @auth
                    <form class="" action="{{ url('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0">
                            Log Out 
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>


