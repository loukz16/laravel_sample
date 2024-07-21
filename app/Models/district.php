<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;

    protected $table = 'district';
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
