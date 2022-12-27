<?php

namespace App\Http\Livewire\Finance;

use Livewire\Component;
use App\Models\MainRequest;

class FinanceDeptApproved extends Component
{
    public function render()
    {
    $requests = MainRequest::join('users', 'users.id', '=', 'main_requests.user_id')
        ->join('departments', 'departments.id', 'main_requests.department')
        ->where('main_requests.dept_approval', '=', 'Approved')
        ->where('main_requests.proc_approval', '=', 'Approved')
        ->paginate(15,
        array('users.fname',
            'users.lname',
            'users.profile_photo_path as profile_img',
            'departments.name as dept_name', 'main_requests.reqNo',
            'main_requests.fin_approval',
            'main_requests.created_at'
        ));
        return view('livewire.finance.finance-dept-approved', ['requests'=>$requests])->layout('layouts.admin');
    }
}
