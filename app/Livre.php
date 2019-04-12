<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['titre', 'auteur', 'description', 'category_id'];
    // les champs dont on autorise le remplissage

    //protected $guarded = ['titre'];
    // we prevent the titre field from being filled
    //protected $guarded = ['titre'] ;


    public function category() {
        return $this->belongsTo('App\Category');
    }
}
