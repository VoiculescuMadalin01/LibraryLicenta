<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    
    public function books()
    {
        return $this->BelongsToMany('App\Book');
    }
}
