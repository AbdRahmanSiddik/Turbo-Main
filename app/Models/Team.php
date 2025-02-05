<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = ['id_team'];
    protected $primarykey = ['id_team'];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id', 'id');
    }
}
