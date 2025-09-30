<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QcInspection extends Model
{
    use HasFactory;

    protected $fillable = ['production_order_id','inspection_date','inspector_name'];

    protected $casts = [
        'inspection_date' => 'date',
    ];

    public function productionOrder()
    {
        return $this->belongsTo(ProductionOrder::class);
    }

    public function results()
    {
        return $this->hasMany(QcResult::class);
    }
}
