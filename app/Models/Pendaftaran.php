<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';
    protected $primaryKey = 'token_pendaftaran';
    protected $keyType = 'string';
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'token_pendaftaran';
    }
}
