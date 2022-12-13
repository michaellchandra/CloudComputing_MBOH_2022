@extends('layout.index')

@section('content')
<section class="py-5 mt-5">
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 col-xl-5 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div style="max-width: 350px;">
                    <h1 class="display-6 fw-bold mb-4">List&nbsp;<span class="underline">Buku</span>.</h1>
                    <p class="my-4">Lihat list buku dengan data real-time dari Google Play Books</p>
                </div>
            </div>
            <div class="col-md-6">
                <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;height: 289.758px;" src="assets/img/illustrations/ranking.svg"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-3" style="padding-left: 0px;padding-right: 0px;">
                <h1 style="font-size: 22px;">Discover</h1><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 8px;border-radius: 35px;">New Release</button><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 31px;border-radius: 35px;">Button</button>
                <h1 style="font-size: 22px;">Category</h1><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 8px;border-radius: 35px;">Adventure</button><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 8px;border-radius: 35px;">Fiction</button><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 8px;border-radius: 35px;">Romance</button><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 8px;border-radius: 35px;">Fantasy</button><button class="btn btn-primary" type="button" style="width: 249.219px;margin-bottom: 8px;border-radius: 35px;">Others</button>
                <div class="btn-group" role="group"></div>
            </div>
            <div class="col-md-4 col-xl-9" style="padding-left: 29px;"></div>
        </div>
    </div>
</section>
<section></section>

@endsection