<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
    use Notifiable;
    protected $hidden = ['created_at','updated_at', 'deleted_at'];
}
