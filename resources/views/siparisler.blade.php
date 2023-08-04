@extends('layouts.master')
@section('title','Siparisler')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black text-center">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                        <thead>
                        <th style="width: 20%">Product</th>
                        <th style="width: 20%">Total</th>
                        <th style="width: 10%">Detail</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                            <td>$250.00</td>
                            <td><button class="btn btn-primary mx-2">Detail</button></td>
                        </tr>
                        <tr>
                            <td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
                            <td>$100.00</td>
                            <td><button class="btn btn-primary mx-2">Detail</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
