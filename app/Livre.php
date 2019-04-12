<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['titre', 'auteur', 'description'];
    // les champs dont on autorise le remplissage

    //protected $guarded = ['titre'];
    // we prevent the titre field from being filled
    //protected $guarded = ['titre'] ;
}
