<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatans';
    protected $primaryKey = 'token_kegiatan';
    protected $keyType = 'string';
    protected $guarded = ['id_kegiatan'];

    public function getRouteKeyName()
    {
        return 'token_kegiatan';
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'kegiatan_id', 'id_kegiatan');
    }

    protected $casts = [
        'tanggal_mulai' => 'datetime',
        'tanggal_akhir' => 'datetime',
    ];

    public function team()
    {
        return $this->belongsToMany(Team::class, 'pendaftarans', 'kegiatan_id', 'team_id', 'id_kegiatan', 'id_team');
    }

    public function peserta()
    {
        return $this->belongsToMany(User::class, 'pendaftarans', 'kegiatan_id', 'peserta_id', 'id_kegiatan', 'id');
    }
}
