<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class ProcurementDashboard extends Component
{
    public function render()
    {
        $requests = Request::join('users', 'users.id', '=', 'requests.user_id' )
        ->where('requests.department', Auth::user()->department)
        ->distinct()->get(['requests.reqNo', 'requests.dept_approval', 'requests.created_at', 'users.fname', 'users.lname']);

        // $requests = Request::select('reqNo', 'dept_approval', 'created_at')
        // ->where('department', Auth::user()->department)
        // ->distinct()->get();
        return view('livewire.procurement.procurement-dashboard', ['requests'=>$requests])->layout('layouts.admin');
    }
}
