<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $primaryKey = 'token_kegiatan';
    protected $keyType = 'string';
    protected $guarded = ['id_kegiatan'];

    public function getRouteKeyName()
    {
        return 'token_kategori';
    }

}
