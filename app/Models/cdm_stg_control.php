<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cdm_stg_control extends Model
{
    use HasFactory;
    protected $table = 'cdm_stg_control';
    protected $fillable = [
        'id',
        'state_code',
        'cd_code',
        'eb_code',
        'process_date_msar',
        'process_date_mspr',
        'process_date_hh',
        'process_date_eb',
        'snapshot_id'
    ];
}
