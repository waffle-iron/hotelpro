<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Webpatser\Uuid\Uuid;
use Lcobucci\JWT\Parser;

class User extends Authenticatable
{
    use Notifiable;

    private $_permissions;

    const TYPE_ADMIN_SUPER = 1;
    const TYPE_ADMINHOTEL = 19;
    const TYPE_USER = 29;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password','tel','cni','passport','avatar','prenom','uuid','type','role_id','hotel_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'permissions'
    ];

    public function scopeGetClearPassword()
    {
        $token = (new Parser())->parse((string) $this->password_token); // Parses from a string
        //$token->getHeaders(); // Retrieves the token header
        //$token->getClaims(); // Retrieves the token claims

        //echo $token->getHeader('jti'); // will print "4f1g23a12aa"
        return $token->getClaim('password');
    }

    public function getPermissions()
    {
        return $this->_permissions;
    }
    public function hotels() {
        return $this->belongsTo('App\Hotel', 'hotel_id');
    }
    public function roles() {
        return $this->belongsTo('App\Role', 'role_id');
    }
}
