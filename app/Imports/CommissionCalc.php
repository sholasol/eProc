<?php

namespace App\Imports;

use App\Models\CommissionImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class CommissionCalc implements ToModel, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CommissionImport([
            'full_name'         => $row[0],
            'policy_no'         => $row[1],
            'policy_type'       => $row[2],
            'policy_subtype'    => $row[3],
            'term'              => $row[4],
            'pay_frqncy'        => $row[5],
            'prm_applied'       => $row[6],
            'no_prm_applied'    => $row[7],
            'comm_payable'      => $row[8],
            'upload_by'         => Auth::user()->id,
            'month'             => date('m'),
            'year'              => date('Y')
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }
}
