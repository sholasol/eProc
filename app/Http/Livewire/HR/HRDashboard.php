<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;


class HRDashboard extends Component
{
    public function render()
    {
        $requests = Request::join('users', 'users.id', '=', 'requests.user_id' )
        ->where('requests.department', Auth::user()->department)
        ->distinct()->get(['requests.reqNo', 'requests.dept_approval', 'requests.created_at', 'users.fname', 'users.lname']);

        return view('livewire.h-r.h-r-dashboard',['requests' =>$requests])->layout('layouts.admin');
    }
}
