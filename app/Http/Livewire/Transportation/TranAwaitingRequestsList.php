<?php

namespace App\Http\Livewire\Transportation;

use Livewire\Component;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\User\ServiceRequests;

class TranAwaitingRequestsList extends Component
{
    public function render()
    {
        $requests = ServiceRequest::join('users','users.id','service_requests.user_id')
                    ->orderBy('service_requests.created_at')
                    ->get(['service_requests.*','users.fname', 'users.profile_photo_path as profile_img',
                            'users.lname']);
        return view('livewire.transportation.tran-awaiting-requests-list', ['requests'=>$requests])->layout('layouts.admin');
    }
}
