<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = ['name','address_line1','city'];

    public function rawMaterialStocks()
    {
        return $this->hasMany(RawMaterialStock::class);
    }

    public function finishedGoodStocks()
    {
        return $this->hasMany(FinishedGoodStock::class);
    }

    public function transactions()
    {
        return $this->hasMany(InventoryTransaction::class);
    }
}
