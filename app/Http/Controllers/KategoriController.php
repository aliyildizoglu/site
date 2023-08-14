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
    public function index($slug_kategoriadi)
    {
        // Veritabanından belirtilen slug değeri ile ilgili kategori bilgisini alıyoruz.
        $kategori = Kategori::where('slug', $slug_kategoriadi)->firstOrFail();

        // Belirtilen kategorinin altındaki kendi sahip olduğu alt kategorileri çekiyoruz.
        $alt_kategoriler = Kategori::where('ust_id', $kategori->id)->get();

        // Sıralama parametresini alıyoruz.
        $order = request('order');

        if ($order == 'coksatanlar') {
            // Eğer sıralama "coksatanlar" ise, en çok satan ürünleri getiriyoruz.
            $urunler = $kategori->urunler()->distinct()
                ->join('urun_detay', 'urun_detay.urun_id', '=', 'urun.id') // Burada urun.id kullanılıyor.
                ->orderBy('urun_detay.goster_cok_satan', 'desc')->paginate(2);
        } elseif ($order == 'yeni') {
            // Eğer sıralama "yeni" ise, en yeni ürünleri getiriyoruz.
            $urunler = $kategori->urunler()->distinct()->orderByDesc('guncelleme_tarihi')->paginate(2);
        } else {
            // Varsayılan olarak, kategoriye ait ürünleri getiriyoruz.
            $urunler = $kategori->urunler()->paginate(2);
        }

        // 'kategori', 'urunler' ve 'alt_kategoriler' değişkenlerini kullanarak 'kategori' görünümünü oluşturuyoruz.
        return view('kategori', compact('kategori', 'urunler', 'alt_kategoriler'));
    }
}

