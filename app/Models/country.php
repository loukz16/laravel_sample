<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $table = 'country';
    protected $fillable = [
        'code_1',
        'code_2',
        'code_3',
        'name_ms',
        'name_en',
        'remarks',
        'creator_id',
        'created_timestamp',
        'modifier_id',
        'modified_datetime',
        'record_version',
        'record_status',
        'ptb_code',
        'census_code',
    ];
}
