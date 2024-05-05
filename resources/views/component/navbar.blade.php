<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            {{-- <img src="{{ asset('productly') }}/public/assets/img/logo-rskb-merah.png" height="40" alt="logo">  --}}
            <img src="{{ asset('productly') }}/public/assets/img/rskb.png" height="40" alt="logo">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
            <input class="form-control form-control-sm ms-5 me-2" type="search" placeholder="Search"
                aria-label="Search">
            <button class="btn btn-outline-danger btn-sm" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Home/Profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Home/Karir">Karir</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                        aria-expanded="false" href="#">
                        Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="/Home/UGD">Unit Gawat Darurat</a></li>
                        <li><a class="dropdown-item" href="/Home/Poliklinik">Poliklinik</a></li>
                        <li><a class="dropdown-item" href="/Home/RawatInap">Rawat Inap</a></li>
                        <li><a class="dropdown-item" href="/Home/Operasi">Operasi</a></li>
                        <li><a class="dropdown-item" href="/Home/Radiologi">Radiologi</a></li>
                        <li><a class="dropdown-item" href="/Home/Laboratorium">Laboratorium</a></li>
                        <li><a class="dropdown-item" href="/Home/Apotek">Apotek</a></li>
                        <li><a class="dropdown-item" href="/Home/Ambulance">Ambulance</a></li>
                        <li><a class="dropdown-item" href="/Home/Biaya">Biaya</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                        aria-expanded="false" href="#">
                        Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="#footer">Kontak Kami</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                        aria-expanded="false" href="#">
                        Jadwal Dokter
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <li><a class="dropdown-item" href="/Home/Jadwal">Jadwal Dokter IGD</a></li>
                        <li><a class="dropdown-item" href="/Home/Jadwal">Jadwal Dokter Spesialis</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Home/Berita">Berita</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
