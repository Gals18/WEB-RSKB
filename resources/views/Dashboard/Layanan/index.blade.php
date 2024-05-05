@extends('Dashboard.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Layanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Layanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="nav-link collapsed d-flex fw-bold mb-4" href="#" data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Tambah Layanan
                    <div class="sb-sidenav-collapse-arrow"><i class="far fa-plus-square fa-lg ms-3"
                            style="color: #0080ff;"></i>
                    </div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages">
                    <form class="mb-4">
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-medkit" style="color: #aeaed2;"></i>
                                </span>
                                <input class="form-control" id="inputEmail" type="email" name="email"
                                    placeholder="Masukan Nama Layanan" required />
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Deskripsi</label>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-images" style="color: #aeaed2;"></i>
                                </span>
                                <input class="form-control" id="inputEmail" type="file" name="gambar"
                                    placeholder="Masukan File Gambar" required />
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Layanan</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
