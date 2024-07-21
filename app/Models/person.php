<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    protected $table = 'person';
    protected $fillable = [
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
        'contact_no1',
        'contact_no_source1',
        'contact_no2',
        'contact_no_source2',
        'contact_no3',
        'contact_no_source3',
        'contact_no4',
        'contact_no_source4',
        'contact_no5',
        'contact_no_source5',
        'email1',
        'email_source1',
        'email2',
        'email_source2',
        'email3',
        'email_source3',
        'email4',
        'email_source4',
        'email5',
        'email_source5',
        'dirname_daytimestamp',
        'created_daytimestamp',
        'modified_daytimestamp',
        'occupation',
        'occupation_desc',
        'disability_flag',
        'disability_desc',
        'marital_status',
        'marital_status_desc',
        'education_level',
        'education_level_desc',
        'country_of_birth',
        'state_of_birth',
        'state_of_birth_desc',
        'source',
    ];
}
