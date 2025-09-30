<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','unit','is_active'];

    public function orderItems()
    {
        return $this->hasMany(CustomerOrderItem::class);
    }

    public function productionItems()
    {
        return $this->hasMany(ProductionOrderItem::class);
    }

    public function deliveryItems()
    {
        return $this->hasMany(DeliveryItem::class);
    }

    public function stock()
    {
        return $this->hasMany(FinishedGoodStock::class);
    }
}
