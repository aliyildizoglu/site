<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    protected  $table  ='urun';
    protected  $guarded  =[];
    const CREATED_AT = 'oluşturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
}
