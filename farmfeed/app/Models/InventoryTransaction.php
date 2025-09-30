<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['warehouse_id','type','reference','quantity','unit'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
