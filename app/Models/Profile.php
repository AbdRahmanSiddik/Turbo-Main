<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_profile';

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id_team');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
