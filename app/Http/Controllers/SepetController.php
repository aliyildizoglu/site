<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class SepetController extends Controller
{
    public function index()
    {
        return view('sepet');
    }

    public function ekle()
    {
        $urun = Urun::find(request('id'));

        if (!$urun) {
            return redirect()->route('sepet')->with('mesaj_tur', 'danger')->with('mesaj', 'Ürün bulunamadı.');
        }

        Cart::add([$urun->id, $urun->urun_adi,$urun->fiyati,1]);

        return redirect()->route('sepet')->with('mesaj_tur', 'success')->with('mesaj', 'Ürün sepete eklendi.');
    }
}
