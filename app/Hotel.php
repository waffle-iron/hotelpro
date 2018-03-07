<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
	const STATUS_INACTIF = 0;
	const STATUS_ACTIF = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'logo', 'email', 'ville', 'place_ville', 'place', 'pays', 'tel' , 'nom_proprio', 'tel_proprio','email_proprio',
    ];
}
