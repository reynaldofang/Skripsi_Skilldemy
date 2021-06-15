<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Peserta extends Authenticatable
{
    use Notifiable;

    /**
     * @var string
    */
    protected $table = 'pesertas';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'password', 'phone'
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
        'isEmp'    =>  'boolean',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
