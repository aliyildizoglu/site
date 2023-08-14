<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        // 'Kategori' modelinden 'ust_id' değeri null olan en fazla 3 kategori alınıyor.
        $kategoriler = Kategori::whereRaw('ust_id is null')->take(3)->get();

        // 'UrunDetay' modelinden 'goster_slider' değeri 1 olan en fazla 5 ürün detayını alıyor.
        // Aynı zamanda ilişkili 'urun' modeli de bu sorgu sonucunda çekiliyor.
        $urunler_slider = UrunDetay::with('urun')->where('goster_slider', 1)->take(5)->get();

        // 'Urun' modeliyle 'UrunDetay' modelini 'urun_id' sütunu üzerinden birleştiriyor.
        // Bu sorgu ile 'urun_detay' tablosundaki 'goster_gunun_firsati' değeri 1 olan
        // ürünlerden son güncellenen ürünü seçiyor.
        $urun_gunun_firsati = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun_id')
            ->where('urun_detay.goster_gunun_firsati', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->first();


        $goster_one_cikan = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun_id')
            ->where('urun_detay.goster_one_cikan', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(3)->get();
        $goster_cok_satan = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun_id')
            ->where('urun_detay.goster_cok_satan', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(3)->get();
        $goster_indirimli = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun_id')
            ->where('urun_detay.goster_indirimli', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(3)->get();

        // 'anasayfa' view'ına gerekli verilerle birlikte döner.
        return view('anasayfa', compact('kategoriler', 'urunler_slider', 'urun_gunun_firsati','goster_one_cikan','goster_cok_satan','goster_indirimli'));
    }
}
