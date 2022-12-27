<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\MainRequest;

class DeptApproved extends Component
{
    public function render()
    {
        $requests = MainRequest::join('users', 'users.id', '=', 'main_requests.user_id')
            ->join('departments', 'departments.id', 'main_requests.department')
            ->where('main_requests.dept_approval', '=', 'Approved')
            ->orderBy('main_requests.created_at', 'desc')
            ->paginate(15,
            array('users.fname',
             'users.lname', 'departments.name as dept_name',
             'users.profile_photo_path as profile_img',
             'main_requests.department', 'main_requests.proc_approval', 'main_requests.reqNo',
            'main_requests.created_at'));
        return view('livewire.procurement.dept-approved', ['requests'=>$requests])->layout('layouts.admin');
    }
}
