<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Player extends Model
{
    use Notifiable;

    protected $with = ['position'];
    protected $fillable = [
        'name_player', 'position_id', 'goals'
    ];

    protected $hidden = ['created_at','updated_at', 'deleted_at'];

    /**
     * Get the position the player.
     */
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}
