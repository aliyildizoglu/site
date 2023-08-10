<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected  $table  ='kategori';
    protected  $guarded  =[];
    const CREATED_AT = 'oluşturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';

    public function urunler()
    {
        return $this->belongsToMany(Urun::class,'kategori_urun');
    }

}
