<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function user()
{
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsToMany('App\Orders');
    }
}
