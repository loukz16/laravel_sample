<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $table = 'address';
    protected $fillable = [
        'uid',
        'record_id',
        'record_status',
        'address_type',
        'street_1',
        'street_2',
        'town',
        'attention_name',
        'tel_no',
        'fax_no',
        'email',
        'url',
        'remarks',
        'survey_cost',
        'creator_id',
        'attention_name2',
        'tel_no2',
        'fax_no2',
        'email2',
        'from_address_type',
        'other_postcode',
    ];
}
