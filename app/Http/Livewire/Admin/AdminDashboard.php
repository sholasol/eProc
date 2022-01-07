<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Component
{
    public function render()
    {
        $requests = Request::join('users', 'users.id', '=', 'requests.user_id' )
        //->where('requests.dept_approval', '<>', 1)
        ->distinct()->get(['requests.reqNo','requests.department', 'requests.dept_approval', 'requests.created_at', 'users.fname', 'users.lname']);

        $allReqs = Request::select('reqNo', 'department','item', 'dept_approval', 'created_at')->orderBy('created_at', 'ASC')->get()->take(4);

        return view('livewire.admin.admin-dashboard', ['requests' =>$requests,'allReqs' =>$allReqs])->layout('layouts.admin');
    }
}
