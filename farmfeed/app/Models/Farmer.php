<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Farmer extends Model
{
    use HasFactory;

    protected $fillable = ['name','contact_name','email','phone'];

    public function locations()
    {
        return $this->hasMany(FarmerLocation::class);
    }

    public function orders()
    {
        return $this->hasMany(CustomerOrder::class);
    }
}
