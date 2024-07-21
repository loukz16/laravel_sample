<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    protected $table = 'state';
    protected $fillable = [
        'state_code',
        'state_name_ms',
        'state_code_en',
        'remarks',
        'creator_id',
        'created_timestamp',
        'modifier_id',
        'modified_datetime',
        'region_id',
    ];
}
