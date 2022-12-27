<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;

class ServiceRequests extends Component
{
    public function render()
    {
        $requests = ServiceRequest::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.service-requests', ['requests'=>$requests])->layout('layouts.admin');
    }
}
