<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eb_listing extends Model
{
    use HasFactory;

    protected $table = 'eb_listing';
    protected $fillable = [
        'eb_id',
        'listing_date',
        'other_listing_type_desc',
        'incharge_officer_name1',
        'incharge_officer_name2',
        'verifying_officer_name',
        'received_date',
        'verified_date',
        'corrected_date',
        'entered_date',
        'gis_submitted_date',
        'remarks',
        'record_status',
        'creator_id',
        'created_timestamp',
        'state_org_unit_id',
        'cq_record_status',
        'lq_occupied_count',
        'lq_vacant_count',
        'household_count',
        'population_head_count',
        'source',
    ];
}
