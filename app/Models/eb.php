<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eb extends Model
{
    use HasFactory;
    protected $table = 'eb';
    protected $fillable = [
        'version',
        'code',
        'split_code',
        'strata_type_id',
        'growth_indicator',
        'high_risk_flag',
        'creator_id',
        'created_timestamp',
        'modified_id',
        'modified_datetime',
        'record_status',
        'census_scope',
        'remarks',
        'delete_remarks',
        'mukim_kecil_id',
        'delete_flag',
        'substrata_type_id',
        'nationality_flag',
        'source',
    ];
}
