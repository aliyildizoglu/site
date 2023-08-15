@extends('layouts.master')
@section('title','Kaydol')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="h3 mb-3 text-black text-center">Kullanıcı Kaydı</h2>

                <div class="p-3 p-lg-5 border">
                  @include('layouts.partials.errors')

                    <form id="registrationForm" class="text-center" role="form" method="POST" action="{{ route('kullanici.kaydol') }}">
                        @csrf
                        <div class="form-group">
                            <label for="adsoyad">Ad Soyad</label>
                            <input type="text" class="form-control" value="{{old('adsoyad')}}" name="adsoyad" id="adsoyad" placeholder="Adınızı ve soyadınızı girin" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta Adresi</label>
                            <input type="email" class="form-control" name="email"value="{{old('email')}}" id="email" placeholder="E-posta adresinizi girin" required>
                        </div>
                        <div class="form-group">
                            <label for="sifre">Şifre</label>
                            <input type="password" class="form-control" name="sifre" id="sifre" placeholder="Şifrenizi girin" required>
                        </div>
                        <div class="form-group">
                            <label for="sifre-confirmation">Şifre Tekrarı</label>
                            <input type="password" class="form-control" name="sifre-confirmation" id="sifre-confirmation" placeholder="Şifrenizi tekrar girin" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Kaydol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
