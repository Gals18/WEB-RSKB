@extends('component.index')
@section('content')
    <section class="pt-3 pt-md-7 mb-auto" id="feature">
        <div class="container">
            <h4 class="bg-info text-white fs-9 fw-bold mb-4 text-center">Rawat Inap</h4>
            <hr>
            <div class="col-lg-12 col-sm-12 mb-4">
                <div id="list-example" class="list-group">
                    <!-- List items -->
                    <a class="list-group-item list-group-item-action d-flex justify-content-end" href="#list-item-1">
                        <div class="col-4 me-3">
                            <img src="{{ asset('productly') }}/public/assets/img/rskb.png" class="img-fluid" width="100"
                                height="150" alt="Feature" />
                        </div>
                        <div class="col-8 mt-2">
                            <p class="mb-0 text-truncate" style="max-width: 400px;">
                            </p>
                        </div>
                        
                    </a>
                    <!-- Tambahkan list item lainnya di sini -->
                    <a class="list-group-item list-group-item-action d-flex justify-content-end" href="#list-item-1">
                        <div class="col-6 me-3">
                            <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid ms-2" alt="Feature" />
                        </div>
                        <div class="col-6 mt-3">
                            <h6 class="mb-0 text-truncate" style="max-width: 400px;">Fasilitas Kamar 3</h6>
                            <ul>
                                <li>Satu Ruangan Terdiri dari 18 <i>bed</i> Pasien</li>
                                <li>Tiap dua bed dipisahkan dengan sekat pembatas</li>
                                <li>Setiap 2 bed pasien disediakan 1 buah bedside cabinat</li>
                            </ul>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex justify-content-end" href="#list-item-3">
                        <div class="col-6 me-3">
                            <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid ms-2"   alt="Feature" />
                        </div>
                        <div class="col-6 mt-3">

                            <h6 class="mb-0 text-truncate" style="max-width: 400px;">Fasilitas ruang 1</h6>
                            <ul>
                                <li> 1 ruangan terdiri dari 2 bed pasien.</li>
                                <li>Tiap dua bed dipisahkan dengan sekat pembatas</li>
                                <li>1 ruangan disediakan 1 buah kipas angin.</li>
                                <li>Terdapat kamar mandi dalam.</li>
                            </ul>

                        </div>
                    </a>

                    <a class="list-group-item list-group-item-action d-flex justify-content-end" href="#list-item-3">
                        <div class="col-6 me-3">
                            <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid ms-2"   alt="Feature" />
                        </div>
                        <div class="col-6 mt-3">

                            <h6 class="mb-0 text-truncate" style="max-width: 400px;">Fasilitas ruang 1</h6>
                            <ul>
                                <li>1 ruangan terdiri dari 1 bed pasien</li>
                                <li>Disediakan 1 buah bedside cabinet</li>
                                <li>Disediakan 1 buah AC (Air Conditioning)</li>
                                <li>Terdapat kamar mandi dalam</li>
                                <li>Disediakan 1 buah televisi</li>
                                <li>Disediakan 1 buah sofa penunggu</li>
                            </ul>

                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex justify-content-end" href="#list-item-3">
                        <div class="col-6 me-3">
                            <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid ms-2"   alt="Feature" />
                        </div>
                        <div class="col-6 mt-3">

                            <h6 class="mb-0 text-truncate" style="max-width: 400px;">Fasilitas ruang VIP:</h6>
                            <ul>
                                <li>1 ruangan terdiri dari 1 bed pasien</li>
                                <li>Disediakan 1 buah bedside cabinet</li>
                                <li>Disediakan 1 buah AC (Air Conditioning)</li>
                                <li>Terdapat kamar mandi dalam</li>
                                <li>Disediakan 1 buah TV LCD</li>
                                <li>Disediakan 1 buah bedsofa penunggu</li>
                                <li>Disediakan 1 buah dispenser</li>
                                <li>Disediakan 1 buah refrigerator (kulkas) dengan berbagai macam minuman ringan</li>
                            </ul>

                        </div>
                    </a>
                </div>
                <!-- Pagination -->
                <div id="pagination" class="pagination justify-content-center mt-3" style="display: none;">
                    <a href="#" class="page-link" id="prevPage">Previous</a>
                    <a href="#" class="page-link" id="nextPage">Next</a>
                </div>
            </div>
        </div>

    </section>
@endsection
