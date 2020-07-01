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
                        'name' => 'Inicio',
                        'route' =>'home',
                        'url' => '',
                        'icon' => 'inicio',
                        'description' => ''
                    ],
                    [
                        'name' => 'Mis Avalúos',
                        'route' => 'user.misavaluos',
                        'url' => '',
                        'icon' => 'insignia',
                        'description' => ''
                    ],
                    [
                        'name' => 'Borradores',
                        'route' => 'user.borradores',
                        'url' => '',
                        'icon' => 'borrador',
                        'description' => ''
                    ],
                    [
                        'name' => 'Papelera',
                        'route' => 'user.papelera',
                        'url' => '',
                        'icon' => 'basura',
                        'description' => ''
                    ]
                ];
            default:
                return $this;
        }
    }
}
