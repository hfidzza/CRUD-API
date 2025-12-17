<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/dashboard">
            CRUD App
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'produk' ? 'active' : '' }}"
                       href="/produk">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'kategori' ? 'active' : '' }}"
                       href="/kategori">
                        Kategori
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'pelanggan' ? 'active' : '' }}"
                       href="/pelanggan">
                        Pelanggan
                    </a>
                </li>
            </ul>

            <form method="POST" action="/logout">
                @csrf
                <button class="btn btn-outline-light btn-sm">
                    Logout
                </button>
            </form>
        </div>

    </div>
</nav>
