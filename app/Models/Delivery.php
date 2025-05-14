<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{   
    use HasFactory;
    protected $table = 'deliveries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'order_id',
        'rider_id',
        'pickup_time',
        'delivery_time',
        'status',
        'remarks',
    ];
    
    public function rider()
    {
        return $this->belongsTo(User::class, 'rider_id'); // if referencing users table
    }

     public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}
