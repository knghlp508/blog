<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public $timestamps = false;

    public function user()
    {
        $this->belongsTo('App\User','user_id');
    }
}
