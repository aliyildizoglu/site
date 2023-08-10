<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id =  DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'elektronik']);
        DB::table('kategori')->insert(['kategori_adi' =>'Bilgisayar', 'slug'=>'bilgisayar', 'ust_id'=> $id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Telefon','slug'=>'telefon', 'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Tv ve Ses Sistemleri','slug'=>'tv-ses-sistemleri', 'ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'kamera','slug'=>'kamera', 'ust_id'=>$id]);

        $id =DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitap','slug'=>'kitap']);
        DB::table('kategori')->insert(['kategori_adi'=>'Edebiyat','slug'=>'edebiyat', 'ust_id'=> $id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Çocuk','slug'=>'cocuk', 'ust_id'=> $id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar','slug'=>'Bilgisayar', 'ust_id'=> $id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Sınavlara Hazırlık','slug'=>'sınavlara-hazırlık', 'ust_id'=> $id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Dergi','slug'=>'dergi']);
        DB::table('kategori')->insert(['kategori_adi'=>'Mobilya','slug'=>'mobilya']);
        DB::table('kategori')->insert(['kategori_adi'=>'Dekorasyon','slug'=>'dekarosyon']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kişisel Bakım','slug'=>'kisisel-bakım']);
        DB::table('kategori')->insert(['kategori_adi'=>'Giysi ve Moda','slug'=>'giyim_mode']);
        DB::table('kategori')->insert(['kategori_adi'=>'Anne ve Çocuk','slug'=>'anne-cocuk']);
    }
}
