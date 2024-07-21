<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDM_STG_FF_MSAR extends Model
{
    use HasFactory;

    protected $table = 'cdm_stg_ff_msar';
    protected $fillable = [
        'snapshot_id', 
        'addr_uid',  
        'ngdbbp',  
        'address_id',  
        'bu_no',  
        'lq_no',  
        'unit_number',  
        'LEVEL',  
        'BLOCK',  
        'building_name',  
        'street_name',  
        'section_name',  
        'city_name',  
        'postcode',  
        'state_code',  
        'locality_serial_no',  
        'locality_name',  
        'latitude',  
        'longitude',  
        'pos_changed',  
        'geocode_level',  
        'lq_code',  
        'lq_rented',  
        'lq_class_code',  
        'lq_class_code_remarks',  
        'floor_count', 
        'total_floor_number',  
        'lq_wall_material',  
        'lq_wall_material_remarks',  
        'water_facility',  
        'water_facility_remarks',  
        'electrical_facility',  
        'toilet_facility',  
        'waste_facility',  
        'lq_condition',  
        'remarks',  
        'lq_status',  
        'listing_mode',  
        'listed_date',  
        'updated_date',  
        'approved_date',  
        'dirname_daytimestamp',  
        'created_daytimestamp',  
        'modified_daytimestamp',  
        'data_source'
    ];
}
