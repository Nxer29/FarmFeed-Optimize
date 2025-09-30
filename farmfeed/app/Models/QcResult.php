<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QcResult extends Model
{
    use HasFactory;

    protected $fillable = ['qc_inspection_id','qc_template_item_id','actual_value','is_pass'];

    protected $casts = [
        'is_pass' => 'boolean',
    ];

    public function inspection()
    {
        return $this->belongsTo(QcInspection::class, 'qc_inspection_id');
    }

    public function templateItem()
    {
        return $this->belongsTo(QcTemplateItem::class, 'qc_template_item_id');
    }
}
