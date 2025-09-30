<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $fillable = ['farmer_id','status','requested_date','notes'];

    protected $casts = [
        'requested_date' => 'datetime',
    ];

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function items()
    {
        return $this->hasMany(CustomerOrderItem::class, 'order_id');
    }

    public function deliveries()
    {
        return $this->hasMany(DeliveryOrder::class);
    }

    public function productionOrders()
    {
        return $this->hasMany(ProductionOrder::class);
    }

    public function recurringPlans()
    {
        return $this->hasMany(RecurringPlan::class);
    }
}
