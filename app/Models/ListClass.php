<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ListClass extends Model
{
    /**
     * @var string
     */
    protected $table = 'list_classes';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'location', 'category_id', 'price', 'qty', 'active', 'slug', 'instructor_id', 'fileimage', 'about', 'employeed_id'
    ];

    /**
     * @param $value
     */
    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function employee()
    {
        return $this->belongsTo(Admin::class);
    }


}
