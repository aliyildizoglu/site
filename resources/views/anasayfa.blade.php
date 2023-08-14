@extends('layouts.master')
@section('title','Anasayfa')

@section('content')

    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            @foreach($urunler_slider as $index => $urunler_detay)
                <div class="carousel-item {{$index == 0 ? 'active': ''}}">
                    <figure class="image">
                        <img src="{{asset('assets/images/women.jpg')}}" alt="" class="img-fluid w-100" style="max-height: 50vh; object-fit: cover;">
                    </figure>
                    <div class="carousel-caption text-center">
                        <strong><h3 style="color: #7971EA; ">{{ $urunler_detay->urun->urun_adi }}</h3></strong>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </a>
    </div>

    <div class="site-section block-8">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Büyük İndirim!</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 mb-5 text-center"> <!-- Resmin hizalaması merkezde -->
                    <a href="{{ route('urun', $urun_gunun_firsati->slug) }}">
                        <div class="image-container" style="max-width: 70%; margin: 0 auto;"> <!-- Resmin genişliği sınırlanıyor ve hizalanıyor -->
                            <img src="{{ asset('assets/images/women.jpg') }}" alt="Image placeholder" class="img-fluid rounded">
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-5 text-center pl-md-5">
                    <h2>{{ $urun_gunun_firsati->urun_adi }}</h2>
                    <p><a href="{{ route('urun', $urun_gunun_firsati->slug) }}" class="btn btn-primary btn-sm">Şimdi Al</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Öne çıkanlar</h1>
            </div>
        </div>
        <div class="row">
            @foreach($goster_one_cikan as $urun)
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="{{route('urun',  $urun->slug)}}"><img src="{{asset('assets/images/women.jpg')}}" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">{{$urun->urun_adi}}</h5>
                    <p class="text-center"><a class="btn btn-primary">Alışveriş Yap</a></p>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Categories of The Month -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Çok Satanlar</h1>
            </div>
        </div>
        <div class="row">
            @foreach($goster_cok_satan as $urun)
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="{{route('urun', $urun->slug)}}"><img src="{{asset('assets/images/women.jpg')}}" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">{{$urun->urun_adi}}</h5>
                    <p class="text-center"><a class="btn btn-primary">Alışveriş Yap</a></p>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Categories of The Month -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">İndirimli Ürünler</h1>
            </div>
        </div>
        <div class="row">
            @foreach($goster_indirimli as $urun)
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="{{route('urun', $urun->slug)}}"><img src="{{asset('assets/images/women.jpg')}}" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">{{$urun->urun_adi}}</h5>
                    <p class="text-center"><a class="btn btn-primary">Alışveriş Yap</a></p>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Categories of The Month -->


    <div class="site-section site-blocks-2">
        <div class="container">
            <div class="row">


                @foreach($kategoriler as  $kategori)
                <div  class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="" style="margin-top: 30px">
                    <a class="block-2-item" href="{{route('kategori',$kategori->slug)}}">
                        <figure class="image">
                            <img src="{{asset('assets/images/women.jpg')}}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>{{ $kategori->kategori_adi }}</h3>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </div>



@endsection
