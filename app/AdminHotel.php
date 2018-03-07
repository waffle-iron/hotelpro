<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminHotel extends User
{


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('AdminHotel', function (Builder $builder) {
            $builder->where('type', '=', User::TYPE_ADMINHOTEL);
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'permissions'
    ];
}
