<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
