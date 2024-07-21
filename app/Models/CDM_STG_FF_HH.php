<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDM_STG_FF_HH extends Model
{
    use HasFactory;

    protected $table = 'cdm_stg_ff_hh';
    protected $fillable = [
        'snapshot_id',
        'hh_id',
        'addr_uid',
        'hh_count_male',
        'hh_count_female',
        'dirname_daytimestamp',
        'created_daytimestamp',
        'modified_daytimestamp'
    ];
}
