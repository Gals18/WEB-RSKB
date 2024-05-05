<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{-- <div class="sb-sidenav-menu-heading"></div> --}}
                <a class="mt-3 nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Home
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Carousel</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Footer</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Halaman
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        {{--  autentifikasi --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Profil
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Profil</a>
                                <a class="nav-link" href="register.html">Visi, Misi & Motto</a>
                                <a class="nav-link" href="register.html">Sejarah</a>
                                <a class="nav-link" href="password.html">Lokasi Rumah sakit</a>
                            </nav>
                        </div>
                        {{-- Informasi --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Informasi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">Pengumuman</a>
                                <a class="nav-link" href="404.html">Kontak Kami</a>
                            </nav>
                        </div>
                        {{--  Layanan --}}
                        <a class="nav-link" href="{{ route('layanan') }}">Layanan</a>
                        {{-- <a class="nav-link collapsed" href="" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseLayanan" aria-expanded="false"
                            aria-controls="pagesCollapseLayanan">
                            Layanan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a> --}}

                        {{-- <div class="collapse" id="pagesCollapseLayanan" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">UGD</a>
                                <a class="nav-link" href="404.html">Rawat Inap</a>
                                <a class="nav-link" href="500.html">Poliklinik</a>
                                <a class="nav-link" href="404.html">Rawat Inap</a>
                                <a class="nav-link" href="500.html">Laboratorium</a>
                                <a class="nav-link" href="404.html">Radiologi</a>
                                <a class="nav-link" href="500.html">Apotek</a>
                                <a class="nav-link" href="500.html">Ambulance</a>
                                <a class="nav-link" href="500.html">Biaya</a>
                            </nav>
                        </div> --}}

                        {{-- jadwal Dokter --}}
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseJadwal" aria-expanded="false"
                            aria-controls="pagesCollapseJadwal">
                            Jadwal Dokter
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseJadwal" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">Jadwal Dokter IGD</a>
                                <a class="nav-link" href="404.html">Jadwal Dokter Spesialis</a>
                            </nav>
                        </div>
                        {{-- berita --}}
                        <a class="nav-link" href="layout-sidenav-light.html">Berita</a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
