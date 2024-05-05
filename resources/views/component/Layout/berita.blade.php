@extends('component.index')
@section('content')
    <section class="p-4 pt-3 pt-md-7 mb-6" id="feature">
        <h4 class="bg-info text-white fs-5 fw-bold mb-4  text-center">Berita</h4>

        <div class="row align-items-center mb-4">
            <div class="col-auto">
                <span class="p-2 bg-secondary"></span>
            </div>
            <div class="col-auto">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0;">
                    <div class="container">
                        <a class="navbar-brand" href="#" style="font-size: 20px;">Berita Terkini</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarnewscontent" aria-controls="navbarcontactcontent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarberita">
                            <ul class="navbar-nav ms-auto" style="font-size: 16px;">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Pelatihan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-7 col-sm-12 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('productly') }}/public/assets/img/rskb.png" class="card-img-top img-fluid"
                            alt="Feature" />
                        <div class="card-body">
                            <p class="card-text mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 mb-4">
                    <div class="overflow-auto" style="max-height: 400px;">
                        <!-- Isi konten scroll-able disini -->
                        <span>
                            <h6>List Berita</h6>
                        </span>
                        <!-- Contoh elemen scroll-able -->
                        {{-- catatan : konten yang tertampilakn berita pling baru di upload 7 terbaru --}}
                        <div class="card border mb-2" id="berita1">

                            <p class="text-truncate">natis purus velit vitae magna. Vestibulum ut massa sit amet risus
                                congue ultricies.
                            </p>

                        </div>
                        <div class="card border mb-2" id="berita2">

                            <p class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula
                                vel justo non
                                malesuada. Etiam venenatis, felis ut interdum vehicula, libero risus dignissim dolor, a
                                venenatis purus velit vitae magna. Vestibulum ut massa sit amet risus congue ultricies.
                            </p>

                        </div>
                        <div class="card border m-2" id="berita3">

                            <p class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula
                                vel justo non
                                malesuada. Etiam venenatis, felis ut interdum vehicula, libero risus dignissim dolor, a
                                venenatis purus velit vitae magna. Vestibulum ut massa sit amet risus congue ultricies.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
