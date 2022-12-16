@extends('layout.index')

@section('content')
    <header class="pt-5">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-10 text-left text-md-start mx-auto">
                    <div class="text-left">
                        <h1 class="display-4 fw-bold mb-5 text-primary">Cari Buku Cepat, Mudah dan&nbsp;<span class="underline">Lengkap</span>.</h1>
                        <p class="fs-5 text-muted mb-5">Dapatkan referensi buku bacaan dari mana saja dan kapan saja dengan lengkap serta sumber yang terpercaya</p>
                    </div>
                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark" href="list">Lihat daftar buku</button>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-right position-relative"><img class="img-fluid" src="assets/img/brands/573.jpg" style="width: 800px;"></div>
                </div>
            </div>
        </div>
    </header>
@endsection
