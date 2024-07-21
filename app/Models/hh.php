<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hh extends Model
{
    use HasFactory;
    protected $table = 'cdm_stg_ff_hh';
    protected $fillable = [
        'count_male',
        'count_female',
        'dirname_timestamp',
        'created_daytimestamp',
        'modifed_daytimestamp',
        'snapshot_id',
        'source',
    ];
}
