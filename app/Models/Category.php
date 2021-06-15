<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
        /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'about', 'slug', 'fileimage', 'iconImage'
    ];

    /**
     * @param $value
     */
    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


    public function listclasses()
    {
        return $this->hasMany(Listclass::class);
    }

    public function instructor()
    {
        return $this->hasMany(Instructor::class);
    }
}
