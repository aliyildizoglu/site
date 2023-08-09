<?php

// 'App\Http\Controllers' isim alanını kullanarak Controller sınıfını dahil ediyoruz.
namespace App\Http\Controllers;

// 'App\Models\Kategori' modelini dahil ediyoruz.
use App\Models\Kategori;

// Laravel'in HTTP istek nesnesini kullanabilmek için 'Illuminate\Http\Request' sınıfını dahil ediyoruz.
use Illuminate\Http\Request;

// 'KategoriController' sınıfını 'Controller' sınıfından türetiyoruz.
class KategoriController extends Controller
{
    // 'index' fonksiyonunu tanımlıyoruz, bu fonksiyon belirtilen kategori adına göre verileri çekecek ve görünüm oluşturacak.
    public function index($slug_kategoriadi){

        // Veritabanından belirtilen slug değeri
        $kategori = Kategori::where('slug', $slug_kategoriadi)->firstOrFail();

        // Belirtilen kategorinin altındaki kne sahip ilk kategoriyi çekiyoruz.altkategorileri çekiyoruz.
        $alt_kategoriler = Kategori::where('ust_id',$kategori->id)->get();

        // 'kategori' ve 'alt_kategoriler' değişkenlerini kullanarak 'kategori' görünümünü oluşturuyoruz.
        return view('kategori',compact('kategori','alt_kategoriler'));
    }
}
