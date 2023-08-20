@extends('layouts.master')
@section('title','Sepet')

@section('content')


    <div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5">

            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            @include('layouts.partials.alert')
                            <th class="product-thumbnail">Resim</th>
                            <th class="product-name">Ürün Adı</th>
                            <th class="product-price">Adet Fiyatı</th>
                            <th class="product-quantity">Adet</th>
                            <th class="product-total">Tutar</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(\Darryldecode\Cart\Cart::getContent()->count()>0)
                            @foreach(Cart::session(\Illuminate\Support\Facades\Auth::id())->getContent() as $urunCartItem)
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{asset('assets/images/women.jpg')}}" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{$urunCartItem->name}}</h2>
                                    </td>
                                    <td>{{$urunCartItem->price}}</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-default">-</a>
                                        <span>{{$urunCartItem->qty}}</span>
                                        <a href="#" class="btn btn-xs btn-default">+</a>

                                    </td>
                                    <td class="text-center">{{$urunCartItem->subtotal}}</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                                </tr>
                            @endforeach
                        @else
                            Sepette ürün yok!
                        @endif

                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
                    </div>
                </div>

            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black"></span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
