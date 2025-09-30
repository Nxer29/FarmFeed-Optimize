<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RawMaterial extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','description','unit','is_active'];

    public function stocks()
    {
        return $this->hasMany(RawMaterialStock::class);
    }
}
