<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id','sender_id','name', 'body','image','video','attach','user_image'];
}
