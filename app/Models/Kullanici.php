<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kullanici extends Authenticatable
{
    Use SoftDeletes;
    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';



    protected $table= 'kullanici';

    protected $fillable = [
        'adsoyad',
        'email',
        'sifre',
        'aktivasyon_anahtari',
        'aktif_mi'
    ];


    protected $hidden = [
        'sifre',
        'aktivasyon_anahtari',
    ];


    public function getAuthPassword()
    {
        return $this->sifre;
    }

}
