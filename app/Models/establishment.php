<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establishment extends Model
{
    use HasFactory;
    protected $table = 'establishment';
    protected $fillable = [
        'sidap_id',
        'type',
        'registered_name',
        'trading_name',
        'operational_status',
        'legal_status_id',
        'share_listing_type',
        'share_counter',
        'hq_flag',
        'hq_establishment_id',
        'closed_date',
        'price_frame_flag',
        'creator_id',
        'created_timestamp',
        'modifier_id',
        'modified_datetime',
        'record_status',
        'merge_type',
        'screening_modified_datetime',
        'screening_id',
        'screening_reference_year',
        'screening_operational_status',
        'screening_msic_id',
        'screening_worker_head_count',
        'screening_revenue_amt',
        'yr_modified_datetime',
        'yr_record_id',
        'yr_operational_status',
        'yr_record_type_id',
        'yr_msic_id',
        'yr_reference_year ',
        'yr_worker_head_count',
        'yr_output_amt',
        'yr_input_amt',
        'yr_fixed_asset_amt',
        'yr_salary_amt',
        'yr_area_size',
        'yr_output_quantity',
        'yr_close_stock_amt',
        'yr_sales_amt',
        'bu_type',
        'yr_abroad_investment_flag',
        'yr_non_resident_ownership_perc',
        'source',
        'esurvey_flag',
        'business_reg_type',
        'business_reg_no',
        'general',
        'mth_modified_datetime',
        'mth_record_id',
        'mth_operational_status',
        'mth_passive_date',
        'mth_reference_year',
        'mth_msic_id',
        'mth_worker_head_count',
        'mth_sales_amt',
        'mth_salary_amt',
        'mth_area_size',
        'mth_output_qty',
        'mth_usage_amt',
        'mth_purchase_amt',
    ];
}