<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name', 'email', 'password', 'otp'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function team()
    {
        return $this->hasOne(Team::class, 'mentor_id', 'id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class, 'peserta_id');
    }

    public function kegiatans()
    {
        return $this->hasManyThrough(
            Kegiatan::class,
            Pendaftaran::class,
            'peserta_id', // Foreign key di tabel pendaftaran
            'id_kegiatan', // Foreign key di tabel kegiatan
            'id', // Primary key di tabel users
            'kegiatan_id' // Foreign key di tabel pendaftaran
        );
    }
}
