<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductionOrder extends Model
{
    use HasFactory;

    protected $fillable = ['customer_order_id','status','planned_start','planned_end'];

    protected $casts = [
        'planned_start' => 'datetime',
        'planned_end'   => 'datetime',
    ];

    public function customerOrder()
    {
        return $this->belongsTo(CustomerOrder::class);
    }

    public function items()
    {
        return $this->hasMany(ProductionOrderItem::class);
    }

    public function inspections()
    {
        return $this->hasMany(QcInspection::class);
    }
}
