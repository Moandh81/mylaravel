<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function livres() {
        return $this->hasMany('App\Livre');
    }
}
