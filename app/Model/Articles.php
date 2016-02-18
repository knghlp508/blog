<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Model\User','user_id');
    }
}
