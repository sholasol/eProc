<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionImport extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'policy_no',
        'policy_type',
        'policy_subtype',
        'term',
        'pay_frqncy',
        'prm_applied',
        'no_prm_applied',
        'comm_payable',
        'upload_by',
        'month',
        'year'
    ];
    protected $table = "commission_imports";
}
