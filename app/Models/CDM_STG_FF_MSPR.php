<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDM_STG_FF_MSPR extends Model
{
    use HasFactory;

    protected $table = 'cdm_stg_ff_mspr';
    protected $fillable = [
        'snapshot_id',
        'addr_uid',
        'hh_id',
        'individual_uid',
        'individual_id',
        'name',
        'ic',
        'ic_source',
        'ic_old',
        'ic_old_source',
        'ic_uniform',
        'ic_uniform_source',
        'passport_no',
        'passport_no_source',
        'hhh_flag',
        'relationship_hhh',
        'gender_code',
        'date_of_birth',
        'ethnicity_code',
        'ethnicity_remarks',
        'ethnicity_source',
        'religion_code',
        'religion_remarks',
        'religion_source',
        'citizenship_code',
        'citizenship_remarks',
        'citizenship_source',
        'income',
        'income_source',
        'contact_no_1',
        'contact_no_source_1',
        'contact_no_2',
        'contact_no_source_2',
        'contact_no_3',
        'contact_no_source_3',
        'contact_no_4',
        'contact_no_source_4',
        'contact_no_5',
        'contact_no_source_5',
        'email_1',
        'email_source_1',
        'email_2',
        'email_source_2',
        'email_3',
        'email_source_3',
        'email_4',
        'email_source_4',
        'email_5',
        'email_source_5',
        'dirname_daytimestamp',
        'created_daytimestamp',
        'modified_daytimestamp',
        'occupation',
        'disability_flag',
        'occupation_desc',
        'disability_desc',
        'marital_status',
        'marital_status_desc',
        'education_level',
        'education_level_desc',
        'country_of_birth',
        'state_of_birth',
        'state_of_birth_desc',
        'data_source'
    ];
}
