<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * A user that will be capable of logging into the authorization server and
 * of authorize OAuth2 clients.
 *
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oauth_users';

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->roles == 'admin';
    }

}
