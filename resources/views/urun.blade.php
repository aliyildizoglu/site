@extends('layouts.master')
@section('title',$urun->urun_adi)

@section('content')


    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{route('anasayfa')}}">Anasayfa</a>
                @foreach($kategoriler as $kategori)
                <div class="col-md-12 mb-0"><a href="{{route('kategori', $kategori->slug)}}">{{$kategori->kategori_adi}}</a> <span class="mx-2 mb-0">/</span>

                    @endforeach
                    <strong class="text-black">{{$urun->urun_adi}}</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">{{$urun->urun_adi}}</h2>
                    <p>{{$urun->aciklama}}</p>
                    <p><strong class="text-primary h4">{{$urun->fiyati}}</strong></p>

                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>

                    </div>
                    <form action="{{route('sepet.ekle')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$urun->id}}">
                        <input type="submit" class="btn btn-thema"  value="Sepete Ekle">
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
