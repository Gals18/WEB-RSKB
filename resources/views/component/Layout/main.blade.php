@extends('component.index')
@section('content')
    @include('component.carousel')
    <style>
        /* CSS untuk garis horizontal setengah bagian */
        .underline-right {
            border-bottom: 5px solid rgb(235, 57, 34);
            ;
            /* Atur warna dan ketebalan garis */
            width: 30%;
            /* Atur panjang garis setengah */
            margin: 0 auto;
            /* Atur jarak atas dan bawah, dan posisikan secara horizontal di tengah */
            float: right;
            /* Menggeser garis ke kanan */
        }

        .underline-left {
            border-bottom: 5px solid rgb(235, 57, 34);
            ;
            /* Atur warna dan ketebalan garis */
            width: 30%;
            /* Atur panjang garis setengah */
            margin: 0 auto;
            /* Atur jarak atas dan bawah, dan posisikan secara horizontal di tengah */
            float: left;
            /* Menggeser garis ke kiri */
        }
    </style>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="" id="feature">
        <div class="container">
            <h1 class="fs-6 fw-bold mb-4 text-center" data-aos="fade-up" data-aos-duration="1000"> Memberikan Layanan
                Terbaik<br class="d-none d-xl-block" />Rumah Sakit Khusus Bedah</h1>

            <span>
                <p class="underline-left" data-aos="fade-right"></p>
                <p class="underline-right" data-aos="fade-left"></p>
            </span>
            <br>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-procedures fa-lg mb-4 mt-4" style="color: #0080ff;"></i>
                    <h4 class="mb-3">Unit Gawat Darurat</h4>
                    <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
                </div>
                <!-- bagian modal -->
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" style="background-color: #f8f9fa; border-radius: 10px;"
                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <!-- SVG background -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#1976da" fill-opacity="1"
                                    d="M0,224L34.3,197.3C68.6,171,137,117,206,128C274.3,139,343,213,411,250.7C480,288,549,288,617,256C685.7,224,754,160,823,165.3C891.4,171,960,245,1029,266.7C1097.1,288,1166,256,1234,240C1302.9,224,1371,224,1406,224L1440,224L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
                                </path>
                            </svg>
                            <!-- Modal Header -->
                            <div class="modal-header pb-4"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <h5 class="modal-title mx-auto" id="exampleModalLabel">Unit Gawat Darurat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Modal Body -->
                            <img src="{{ asset('productly') }}/public/assets/img/UGD2.jpg"
                                class="img-fluid mx-auto d-block mt-3" width="400" height="100" alt="Feature"
                                data-tilt />
                            <div class="modal-body">
                                <h5 class="text-center">Pelayanan</h5>
                                <ul>
                                    <li>Menangani kasus-kasus emergency/gawat darurat</li>
                                    <li>Perawatan medis dan operasi minor</li>
                                    <li>Observasi</li>
                                    <li>Tes laboratorium</li>
                                    <li>Pemeriksaan radiologi</li>
                                    <li>Unit farmasi</li>
                                </ul>
                            </div>
                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary text-center"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#1976da" fill-opacity="1"
                                    d="M0,128L8.6,149.3C17.1,171,34,213,51,202.7C68.6,192,86,128,103,101.3C120,75,137,85,154,96C171.4,107,189,117,206,112C222.9,107,240,85,257,64C274.3,43,291,21,309,10.7C325.7,0,343,0,360,5.3C377.1,11,394,21,411,69.3C428.6,117,446,203,463,240C480,277,497,267,514,256C531.4,245,549,235,566,197.3C582.9,160,600,96,617,85.3C634.3,75,651,117,669,128C685.7,139,703,117,720,117.3C737.1,117,754,139,771,144C788.6,149,806,139,823,144C840,149,857,171,874,149.3C891.4,128,909,64,926,85.3C942.9,107,960,213,977,266.7C994.3,320,1011,320,1029,293.3C1045.7,267,1063,213,1080,197.3C1097.1,181,1114,203,1131,208C1148.6,213,1166,203,1183,192C1200,181,1217,171,1234,170.7C1251.4,171,1269,181,1286,202.7C1302.9,224,1320,256,1337,272C1354.3,288,1371,288,1389,250.7C1405.7,213,1423,139,1431,101.3L1440,64L1440,320L1431.4,320C1422.9,320,1406,320,1389,320C1371.4,320,1354,320,1337,320C1320,320,1303,320,1286,320C1268.6,320,1251,320,1234,320C1217.1,320,1200,320,1183,320C1165.7,320,1149,320,1131,320C1114.3,320,1097,320,1080,320C1062.9,320,1046,320,1029,320C1011.4,320,994,320,977,320C960,320,943,320,926,320C908.6,320,891,320,874,320C857.1,320,840,320,823,320C805.7,320,789,320,771,320C754.3,320,737,320,720,320C702.9,320,686,320,669,320C651.4,320,634,320,617,320C600,320,583,320,566,320C548.6,320,531,320,514,320C497.1,320,480,320,463,320C445.7,320,429,320,411,320C394.3,320,377,320,360,320C342.9,320,326,320,309,320C291.4,320,274,320,257,320C240,320,223,320,206,320C188.6,320,171,320,154,320C137.1,320,120,320,103,320C85.7,320,69,320,51,320C34.3,320,17,320,9,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- penutup modal -->
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fas fa-stethoscope fa-lg mb-4 mt-4 mt-4" style="color: #FFD43B;"></i>
                    <h4 class="mb-3">Poliklinik</h4>
                    <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fas fa-clinic-medical fa-lg mb-4 mt-4" style="color: #ff8080;"></i>
                    <h4 class="mb-3">Rawat Inap</h4>
                    <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fab fa-cuttlefish fa-lg mb-4 mt-4" style="color: #B197FC;"></i>
                    <h4 class="mb-3">Operasi</h4>
                    <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of the person.</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fas fa-x-ray fa-lg mb-4 mt-4" style="color: #B197FC;"></i>
                    <h4 class="mb-3">Radiologi</h4>
                    <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fas fa-flask fa-lg mb-4 mt-4" style="color: #FFD43B;"></i>
                    <h4 class="mb-3">Laboratorium</h4>
                    <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fas fa-prescription-bottle-alt fa-lg mb-4 mt-4" style="color: #ff8080;"></i>
                    <h4 class="mb-3">Apotek</h4>
                    <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2 text-center" data-aos="flip-left" data-aos-duration="1000">
                    <i class="fas fa-ambulance fa-lg mb-4 mt-4" style="color: #0080ff;"></i>
                    <h4 class="mb-3">Ambulance</h4>
                    <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of the person.
                    </p>
                </div>
            </div>


            <h1 class="fs-6 fw-bold mb-4 mt-6 text-center" data-aos="fade-up" data-aos-duration="1000">Informasi Penting
            </h1>
            <span>
                <p class="underline-left" data-aos="fade-right"></p>
                <p class="underline-right" data-aos="fade-left"></p>
            </span>
            <br>
            <div class="row pt-5 justify-content-center">
                <div class="col-lg-5 col-sm-6 me-3">
                    <div class="card border shadow animated-text " data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <h5 class="card-title text-center">6 Sasaran Keselamatan Pasien</h5>
                            <ol>
                                <li>Ketepatan identifikasi pasien.</li>
                                <li>Peningkatan komunikasi yang efektif.</li>
                                <li>Peningkatan keamanan obat yang perlu diwaspadai (high-allert)</li>
                                <li>Kepastian tepat-lokasi, tepat-prosedur, tepat pasien operasi.</li>
                                <li>Pengurangan risiko infeksi tekait pelayanan kesehatan.</li>
                                <li>Pengurangan risiko pasien jatuh.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6 me-3">
                    <div class="card border shadow animated-text" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body text-center">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>


            <h1 class="fs-6 fw-bold mb-7 mt-6 text-center">Berita Rumah Sakit Khusus Bedah<br class="d-none d-xl-block" />
            </h1>
            <span>
                <p class="underline-left" data-aos="fade-right"></p>
                <p class="underline-right" data-aos="fade-left"></p>
            </span>
            <br>
            <div class="row">
                <div class="col-6">
                    <nav class="navbar navbar-expand-lg navbar-dark py-2" style="background-color: rgb(230, 41, 41);">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarberitacontent"
                            aria-controls="navbarberitacontent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarberitacontent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link" href="#">Berita Terkini</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">HUT RSKB</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pelatihan HDP</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Indikator Mutu</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="overflow-auto" style="max-height: 400px;">
                        <!-- Isi konten scroll-able disini -->
                        <!-- Contoh elemen scroll-able -->
                        {{-- catatan : konten yang tertampilakn berita pling baru di upload 7 terbaru --}}
                        <div class="card" id="berita1">
                            <p>Konten Berita 1</p>
                            <div class="card-body">
                                <p>natis purus velit vitae magna. Vestibulum ut massa sit amet risus congue ultricies.
                                </p>
                            </div>
                        </div>
                        <div class="card" id="berita2">
                            <p>Konten Berita 2</p>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula vel justo non
                                    malesuada. Etiam venenatis, felis ut interdum vehicula, libero risus dignissim dolor, a
                                    venenatis purus velit vitae magna. Vestibulum ut massa sit amet risus congue ultricies.
                                </p>
                            </div>
                        </div>
                        <div class="card" id="berita3">
                            <p>Konten Berita 3</p>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula vel justo non
                                    malesuada. Etiam venenatis, felis ut interdum vehicula, libero risus dignissim dolor, a
                                    venenatis purus velit vitae magna. Vestibulum ut massa sit amet risus congue ultricies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border shadow m-2">
                        <div class="card-body d-flex align-items-center">
                            <img src="{{ asset('productly') }}/public/assets/img/rskb.png" alt="berita1" class="me-4"
                                width="50px" height="20px">
                            <a href="#berita1" onclick="showBerita('berita1')" class="text-truncate"
                                style="max-width: 300px; text-decoration: none;">coba 1 jfugrtrittjgrjmiehrgun tempor
                                incididunt ut labore et dolore magna aliqua.jrie</a>
                        </div>
                    </div>
                    <div class="card border shadow m-2">
                        <img src="" alt="berita2" width="50px" height="20px">
                        <div class="card-body">
                            <a href="#berita2" onclick="showBerita('berita2')">coba 2</a>
                        </div>
                    </div>
                    <div class="card border shadow m-2">
                        <img src="" alt="berita3" width="50px" height="20px">
                        <div class="card-body">
                            <a href="#berita3" onclick="showBerita('berita3')">coba 3</a>
                        </div>
                    </div>
                    <div class="card border shadow m-2">
                        <img src="" alt="berita3" width="50px" height="20px">
                        <div class="card-body">
                            <a href="#berita4" onclick="showBerita('berita4')">coba 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <script>
        function showBerita(id) {
            // Menampilkan konten berita yang sesuai dengan id yang dipanggil
            var kontenBerita = document.getElementById(id);
            kontenBerita.style.display = "block";

            // Menyembunyikan konten berita lainnya
            var semuaBerita = document.querySelectorAll('.card[id^="berita"]');
            semuaBerita.forEach(function(berita) {
                if (berita.id !== id) {
                    berita.style.display = "none";
                }
            });
        }
    </script>
@endsection
