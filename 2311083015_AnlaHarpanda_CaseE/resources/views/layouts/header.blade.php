<!-- resources/views/layouts/header.blade.php -->

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">UTS Anla Harpanda (2311083015)<br>Kelas TRPL 2D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href= {{ route('hewan.index') }}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href= {{ route('hewan.sampah') }}>Data Hewan Dihapus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
