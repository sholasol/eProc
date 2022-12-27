<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentActivity extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','basic','total_allowance', 'gross', 'total_deduction', 'tax','grand_deduction','net_salary','grade','month','year','code', 'loan', 'loan_payment'];

    protected $table = 'payment_activities';
}
