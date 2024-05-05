@extends('component.index')
@section('content')

<p>Ini adalah halaman pendaftaran</p>
<div class="row">
    <div class="col-lg-6">
  
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Masukan NIK</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Masukan No Rekam Medis</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="col-lg-6"><img class="img-fluid"
    src="{{ asset('productly') }}/public/assets/img/validation/validation.png"
    alt="" /></div>
    </div>
</div>
@endsection