@extends('layouts.master')
@section('title', 'Kategori')

@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-12">
                <div class="col-md-12 mb-0">
                    <a href="{{ route('anasayfa') }}">Anasayfa</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ $kategori->kategori_adi }}</strong>
                </div>
                <div class="col-md-12 text-center mb-3">
                    <a href="?order=coksatanlar" class="btn btn-primary mr-2">Yeni Ürünler</a>
                    <a href="?order=yeni" class="btn btn-primary">Çok Satanlar</a>
                </div>
                <div class="col-md-9 order-2">
                    <div class="row mb-5">
                        @if(count($urunler) == 0)
                            <div class="col-md-12 text-center">
                                <p>Bu kategoride henüz ürün bulunmamaktadır.</p>
                            </div>
                        @else
                            @foreach($urunler as $urun)
                                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                    <div class="block-4 text-center border">
                                        <figure class="block-4-image">
                                            <a href="{{ route('urun', $urun->slug) }}">
                                                <img src="{{ $urun->resim_url }}" alt="Image placeholder" class="img-fluid">
                                            </a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="{{ route('urun', $urun->slug) }}">{{ $urun->urun_adi }}</a></h3>
                                            <p class="mb-0">{{ $urun->slug }}</p>
                                            <p class="text-primary font-weight-bold">{{ $urun->fiyati }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if(count($urunler) > 0)
                        <div class="row" data-aos="fade-up">
                            <div class="col-md-12 text-center">
                                <div class="site-block-27">
                                    <ul>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-3 order-1 mb-5 mb-md-0">
                    <div class="border p-4 rounded mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">{{ $kategori->kategori_adi }}</h3>
                        <ul class="list-unstyled mb-0">
                            @foreach($alt_kategoriler as $alt_kategori)
                                <li class="mb-1"><a href="{{ route('kategori', $alt_kategori->slug) }}" class="d-flex"><span>{{ $alt_kategori->kategori_adi }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
