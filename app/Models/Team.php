<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id'];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id', 'id');
    }
}
