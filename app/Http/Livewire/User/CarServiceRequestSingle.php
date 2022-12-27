<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\ServiceRequest;

class CarServiceRequestSingle extends Component
{

    public $reqNo;

    public function mount($reqNo) {
        $this->reqNo = $reqNo;
    }

    public function render()
    {
        $req = ServiceRequest::where('reqNo', $this->reqNo)
            ->join('users', 'users.id', 'service_requests.user_id')
            ->join('departments', 'departments.id', 'users.department')
            ->first();
        return view('livewire.user.car-service-request-single', ['req'=>$req])->layout('layouts.admin');
    }
}
