<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryOrder extends Model
{
    use HasFactory;

    protected $fillable = ['customer_order_id','delivery_date','status'];

    protected $casts = [
        'delivery_date' => 'date',
    ];

    public function customerOrder()
    {
        return $this->belongsTo(CustomerOrder::class);
    }

    public function items()
    {
        return $this->hasMany(DeliveryItem::class);
    }
}
