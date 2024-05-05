@extends('component.index')
@section('content')
    <section class="pt-3 pt-md-7 mb-auto" id="feature">
        <div class="container ">
            <h3 class="fs-7 fw-bold mb-4 text-center">Halaman Profil</h3>
            <div class="embed-responsive embed-responsive-21by9 mb-4 text-center">
                <iframe class="embed-responsive-item" style="width: 50%; height: 200px; opacity: 0.7"
                    src="https://www.youtube.com/embed/7dDCgIsFBeM?si=YC4RoouTnsUDEy0y" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <hr>
            </div>
                      
            <div class="row d-flex text-center" data-aos="zoom-in">
                <div class="col-12 col-md-5" data-aos="zoom-in-left">
                    <img src="{{ asset('productly') }}/public/assets/img/profil1.jpg" class="img-fluid animated-text"
                        alt="Unit Gawat Darurat">
                </div>
                <div class="col-12 col-md-7" data-aos="zoom-in-right" data-aos-duration="1000">
                    <h5 class="mb-4" data-tilt>Sejarah RSKB</h5>
                    <small class="ms-4 justify-content-start">
                        Rumah Sakit Khusus Bedah Ringroad Selatan Yogyakarta didirikan oleh sembilan dokter spesialis
                        bedah dari
                        berbagai Sub Spesialisasi yang terga bung dalam wadah Lembaga Medik Surgika dengan ijin
                        penyelenggaraan
                        RSKB No 503 / 545 / 2005 dan perpanjangan ijin penyelenggaraan RSKB No.445/ 7352/V.2. Rumah
                        Sakit Khusus
                        Bedah Ringroad Selatan Yogyakarta diresmikan oleh Bupati Bantul pada 10 Desember 2005.
                        Operasional
                        sempat terhenti akibat gempa bumi bulan Mei 2006. Akan tetapi dengan usaha yang keras, Rumah
                        Sakit
                        Khusus Bedah Ringroad Selatan dapat beroperasi kembali.
                        Kesembilan dokter sub spesialis bedah yang tergabung dalam Lembaga Medik Surgika (LMS)
                        bertanggungjawab
                        atas kelancaran jalannya pelayanan di RSKB Ringroad Selatan. Berikut ini adalah kesembilan
                        dokter sub
                        spesialis yang menjadi pengurus Lembaga Medik Surgika:
                    </small>
                </div>
            </div>
            <div class="row d-flex mt-5" data-aos="zoom-in">
                <div class="col-12 col-md-4" data-aos="zoom-in-left">
                    <p class="fw-8 text-center">Visi :</p>
                    <small class="text-center">RSKB Ringroad Selatan menjadi rumah sakit khusus bedah yang dapat mengatasi dan memecahkan masalah penyakit bedah di masyarakat.</small>
                </div>
                <div class="col-12 col-md-4" data-aos="zoom-in-right" data-aos-duration="1000">
                    <p class="fw-8 ">Misi :</p>
                    <small class="ms-4 justify-content-start">
                     <ol>
                        <li>Melaksanakan pelayanan medis terutama pelayanan bedah spesialis dan bedah sub spesialis</li>
                        <li>Mewujudkan proses pelayanan yang mengutamakan keselamatan pasien</li>
                        <li>Mewujudkan kepercayaan dan kepuasan pelanggan</li>
                     </ol>
                    </small>
                </div>
                <div class="col-12 col-md-4" data-aos="zoom-in-left">
                    <p class="fw-8 text-center">Motto :</p>
                    <small class="text-center">PELAYANAN BEDAH CEPAT, TEPAT DAN PROFESIONAL</small>
                </div>
            </div>
        </div>


    </section>
@endsection
