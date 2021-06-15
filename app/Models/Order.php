<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'peserta_id','employee_id', 'status', 'grand_total', 'class_count', 'payment_status', 'payment_method', 
        'name',  'phone_number', 'fileimage'
    ];

    public function employee()
    {
        return $this->belongsTo(Admin::class);
    }

    public function peserta()
    {
        return $this->belongTo(Peserta::class);
    }
}
