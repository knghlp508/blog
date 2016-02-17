<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany('App\Articles','user_id','id');
    }
}
