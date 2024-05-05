@extends('component.index')
@section('content')
<section class="pt-3 pt-md-7 mb-auto" id="feature">
<div class="container">
   
    <h4 class="bg-info text-white fs-9 fw-bold mb-4 text-center">Unit Gawat Darurat 24 Jam</h4>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <h5>Pelayanan</h5>
            <ul>
                <li>Menangani kasus-kasus emergency/gawat darurat</li>
                <li>Perawatan medis dan operasi minor</li>
                <li>Observasi</li>
                <li>Tes laboratorium</li>
                <li>Pemeriksaan radiologi</li>
                <li>Unit farmasi</li>
            </ul>
            {{-- <button type="button" class="btn btn-primary">Detail</button> --}}

        </div>
        <div class="col-lg-6 mt-3">
            <div class="justify-content-center animated-text text-center">
                <img src="{{ asset('productly') }}/public/assets/img/UGD.jpg" class="img-fluid" alt="Unit Gawat Darurat">
                <br>
               <div class="p-1 mt-3 bg-info ">
                <a href="#" class="text-decoration-none mt-3 text-white me-5"><i class="fas fa-plus-square me-1"></i> Pendaftaran</a>
                <script>
                    var nomor_telepon = '6281227507876'; // tambahkan tanda kutip
                    var pesan = encodeURIComponent('Halo saya Ingin mendaftar pasien. Mohon beri saya arahan');
                    var linkWhatsApp = 'https://wa.me/' + nomor_telepon + '?text=' + pesan;
                </script>
                <a href="javascript:void(0);" onclick="window.location.href=linkWhatsApp;" class="text-decoration-none mt-3 text-white">
                    <i class="fab fa-whatsapp me-1"></i> Hubungi
                </a>
               </div>
            </div>
        </div>
    </div>
    <hr>
</div>
</section>
@endsection

