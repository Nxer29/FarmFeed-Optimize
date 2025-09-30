<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecurringPlan extends Model
{
    use HasFactory;

    protected $fillable = ['customer_order_id','frequency','start_date','end_date'];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    public function customerOrder()
    {
        return $this->belongsTo(CustomerOrder::class);
    }
}
