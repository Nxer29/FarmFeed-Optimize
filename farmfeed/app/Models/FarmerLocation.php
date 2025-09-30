<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FarmerLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'farmer_id','address_line1','address_line2','postal_code','city','country','latitude','longitude'
    ];

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
}
