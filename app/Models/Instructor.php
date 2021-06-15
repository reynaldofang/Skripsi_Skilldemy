<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Instructor extends Authenticatable
{
    use Notifiable;

    /**
     * @var string
    */
    protected $table = 'instructors';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'password', 'phone', 'about', 'category_id', 'experience', 'fileimage'
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

    public function listclasses()
    {
        return $this->hasMany(Listclass::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
