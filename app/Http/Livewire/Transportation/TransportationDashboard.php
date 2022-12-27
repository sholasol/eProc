<?php

namespace App\Http\Livewire\Transportation;

use App\Models\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TransportationDashboard extends Component
{
    public function render()
    {
        $requests = Request::join('users', 'users.id', '=', 'requests.user_id' )
        ->where('requests.department', Auth::user()->department)
        ->distinct()->get(['requests.reqNo', 'requests.dept_approval', 'requests.created_at', 'users.fname', 'users.lname']);

        return view('livewire.transportation.transportation-dashboard', ['requests' =>$requests])->layout('layouts.admin');
    }
}
