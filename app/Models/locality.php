<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locality extends Model
{
    use HasFactory;
    protected $table = 'locality';
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
        'locality_index',
    ];
}
