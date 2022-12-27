<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\CarRequest;
use Illuminate\Support\Facades\Auth;

class ApprovedCarRequestList extends Component
{
    public function render()
    {
        $requests = CarRequest::join('users', 'users.id', '=', 'car_requests.user_id' )
            ->join('departments','departments.id','car_requests.department')
            ->where('dept_approval','Approved')
            // ->where('users.department', '=', Auth::user()->department)
            ->get(['car_requests.*','users.fname','users.lname',
                    'users.profile_photo_path as profile_img',
                    'departments.name as dept_name'
            ]);
        return view('livewire.procurement.approved-car-request-list', ['requests'=>$requests])->layout('layouts.admin');
    }
}
