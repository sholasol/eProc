<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CarRequest;
use Illuminate\Support\Facades\Auth;

class DeptCarRequestList extends Component
{
    public function render()
    {
        $requests = CarRequest::join('users', 'users.id', '=', 'car_requests.user_id' )
            ->where('users.department', '=', Auth::user()->department)
            ->paginate(15);
        return view('livewire.user.dept-car-request-list', ['requests'=>$requests])->layout('layouts.admin');
    }
}
