<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Position extends Model
{
    use Notifiable;

    protected $hidden = ['created_at','updated_at', 'deleted_at'];

    /**
     * Get the players for the position.
     */
    public function players(){
        return $this->hasMany('App\Player');
    }
}
