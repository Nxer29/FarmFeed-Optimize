<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RawMaterialStock extends Model
{
    use HasFactory;

    protected $fillable = ['raw_material_id','warehouse_id','quantity'];

    public function rawMaterial()
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
