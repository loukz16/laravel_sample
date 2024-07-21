<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDM_STG_FF_EB extends Model
{
    use HasFactory;

    protected $table = 'cdm_stg_ff_eb';
    protected $fillable = [
        'snapshot_id',
        'eb_id',
        'ngdbbp',
        'econ_dev_region',
        'eb_category',
        'eb_type',
        'eb_special',
        'high_risk_eb',
        'eb_citizenship',
        'lq_within_eb',
        'lq_within_eb_remarks',
        'eb',
        'eb_split',
        'census_mode',
        'census_mode_remarks',
        'census_circle_code',
        'local_authority_code',
        'parliament_code',
        'dun_code',
        'strata',
        'strata_group',
        'sub_strata',
        'state_code',
        'admin_district_code',
        'census_district_code',
        'subdistrict_code',
        'small_subdistrict_code',
        'listed_date',
        'updated_date',
        'approved_date',
        'geom',
        'dirname_daytimestamp',
        'created_daytimestamp',
        'modified_daytimestamp'
    ];
}
