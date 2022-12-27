<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\ServiceRequest;

class AwaitingCarService extends Component
{
    public function render()
    {
        $requests = ServiceRequest::join('users', 'users.id', 'service_requests.user_id')
                    ->orderBy('service_requests.id', 'desc')
                    ->paginate(10);
        return view('livewire.procurement.awaiting-car-service', ['requests'=>$requests])->layout('layouts.admin');
    }
}
