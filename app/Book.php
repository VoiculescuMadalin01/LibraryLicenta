<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author','description','image','quantity'];

    public function orders()
    {
        return $this->belongsToMany('App\Orders');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

}
