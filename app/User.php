<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'suscripcion'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function menu() {
        switch($this->suscripcion) {
            case 'demo':
                return [
                    [
                        'name' => 'Dashboard',
                        'route' =>'home',
                        'url' => '',
                        'icon' => 'dashboard',
                        'description' => ''
                    ],
                    [
                        'name' => 'Avaluos',
                        'route' => 'user.misavaluos',
                        'url' => '',
                        'icon' => 'badge',
                        'description' => ''
                    ]
                ];
            default:
                return $this;
        }
    }
}
