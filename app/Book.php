<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function logs()
    {
        return $this->hasMany('App\Log');
    }
}
