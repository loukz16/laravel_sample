<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cencus_district extends Model
{
    use HasFactory;

    protected $table = 'cencus_district';
    protected $fillable = [
        'code',
        'name_ms',
        'name_en',
        'remarks',
        'creator_id',
        'created_timestamp',
        'modifier_id',
        'modified_datetime',
        'record_version',
        'record_status',
    ];
}
