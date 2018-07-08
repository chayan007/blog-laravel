<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'comment','user_id','post_id',
    ];

    public function post()
    {
         return $this->belongsTo('App\Post');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
