@extends('layouts.master')
@section('title', 'Arama')
@section('content')
    <div class="container">
        <div class="row">
            @forelse($urunler as $urun)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="{{ route('urun', $urun->slug) }}">
                            <img src="{{ asset('assets/images/women.jpg') }}" class="card-img-top" alt="{{ $urun->urun_adi }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $urun->urun_adi }}</h5>
                            <p class="card-text">{{ $urun->fiyati }} TL</p>
                            <a href="{{ route('urun', $urun->slug) }}" class="btn btn-primary">Ürüne Git</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        Ürün bulunamadı.
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                {{ $urunler->links() }}
            </div>
        </div>
    </div>
@endsection
