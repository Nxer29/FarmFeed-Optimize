<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerOrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','product_id','quantity','unit','notes'];

    public function order()
    {
        return $this->belongsTo(CustomerOrder::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
