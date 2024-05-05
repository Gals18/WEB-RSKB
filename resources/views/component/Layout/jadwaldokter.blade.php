@extends('component.index')
@section('content')
<section class="pt-3 pt-md-7 mb-auto" id="feature">
<div class="container">
    <h6 class="bg-info fs-9 fw-bold text-white mb-4 text-center">Jadwal Dokter</h6>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Senin</th>
                    <th scope="col">Selasa</th>
                    <th scope="col">Rabu</th>
                    <th scope="col">Kamis</th>
                    <th scope="col">Jumat</th>
                    <th scope="col">Sabtu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Dr. dr. Supomo, SpB, BTKV., Subsp.,JD(K)</td>
                    <td>Spesialis Bedah Thoraks, Jantung dan Pembuluh Darah</td>
                    <td>14.00 - selesai</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>08.00 - selesai</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dr. dr. Supomo, SpB, BTKV., Subsp.,JD(K)</td>
                    <td>Spesialis Bedah Thoraks, Jantung dan Pembuluh Darah</td>
                    <td>-</td>
                    <td>-</td>
                    <td>14.00 - selesai</td>
                    <td>-</td>
                    <td>08.00 - selesai</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Dr. dr. Supomo, SpB, BTKV., Subsp.,JD(K)</td>
                    <td>Spesialis Bedah Thoraks, Jantung dan Pembuluh Darah</td>
                    <td>-</td>
                    <td>08.00 - selesai</td>
                    <td>-</td>
                    <td>14.00 - selesai</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</section>
@endsection