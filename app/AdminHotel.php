<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

class AdminHotel extends User
{

    public $table = "users";

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('AdminHotel', function (Builder $builder) {
            $builder->where('type', '<=', User::TYPE_ADMINHOTEL);
        });

        self::creating(function ($model) {
            $model->type = User::TYPE_ADMINHOTEL;

        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password','tel','cni','passport','avatar','prenom','uuid','type','role_id'
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
