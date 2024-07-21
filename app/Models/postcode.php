<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postcode extends Model
{
    use HasFactory;
    protected $table = 'postcode';
    protected $fillable = [
        'stateId',
        'code',
        'creator_id',
        'created_timestamp',
        'modifier_id',
        'modified_datetime',
        'record_version',
        'record_status',
    ];
}
