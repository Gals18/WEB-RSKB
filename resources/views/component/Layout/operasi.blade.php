@extends('component.index')
@section('content')
<style>
    .hexagon {
        width: 173px;
        height: 100px;
        background: url('{{ asset('productly') }}/public/assets/img/UGD.jpg') no-repeat center;
        background-size: cover;
        position: relative;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }

    /* Gaya untuk kontainer gambar */
    .hexagon-container {
        display: inline-block;
    }
</style>
    <section class="pt-3 pt-md-7 mb-auto" id="feature">
        <div class="container">
            <h4 class="bg-info text-white fs-9 fw-bold mb-4 text-center">Operasi</h4>
            <hr>
            <div class="row">
                <div class="hexagon-container">
                    <div class="col-1 hexagon">
                        <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid ms-2 me-3 hexagon"   alt="Feature" />
                    </div>
                    <div class="col-12">
                        <h6 class="mb-0 text-truncate" style="max-width: 400px;">Fasilitas ruang 1</h6>
                        <div class="card">
                            <div class="card-body bg-info">
                                <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid ms-2 me-3 hexagon"  width="20" height="30"  alt="Feature" />
                                <p>Appendictomy</p>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-secondary">
                                Cholesistectom
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-gray-400">
                                Colostomy
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-warning">
                                Hemorroidectomy
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-warning">
                                Hernia Repair
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-warning">
                                Laparatomy
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-warning">
                                AV-Shunt
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body bg-warning">
                                Pasang HD-Catheter
                            </div>
                          </div>
                    </div>
                </div>
               
            </div>
        </div>
        {{-- <div class="hexagon-container">
            <div class="hexagon"></div>
        </div> --}}
    </section>
@endsection