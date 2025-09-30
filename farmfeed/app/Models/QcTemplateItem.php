<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QcTemplateItem extends Model
{
    use HasFactory;

    protected $fillable = ['qc_template_id','parameter','expected_value'];

    public function template()
    {
        return $this->belongsTo(QcTemplate::class, 'qc_template_id');
    }

    public function results()
    {
        return $this->hasMany(QcResult::class);
    }
}
