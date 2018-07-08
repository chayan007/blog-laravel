<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Model
{
    //
    use Notifiable;
    protected $fillable=[
        'title','desc','img_url','slug','user_id',
    ];
    protected $hidden=
    [

    ];
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
