<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class system_status extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_allow_matching',
    ];
}
