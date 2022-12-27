<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Request;
use App\Models\MainRequest;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Component
{
    public function render()
    {
        $requests = MainRequest::join('users', 'users.id', '=', 'main_requests.user_id')
        ->join('departments', 'departments.id', '=', 'main_requests.department')
        ->take(5)
        ->get(array(
            'main_requests.reqNo',
            'main_requests.dept_approval',
            'main_requests.created_at',
            'users.fname',
            'users.lname',
            'departments.name as department'
        ));

        $allReqs = Request::select('reqNo', 'department','item', 'dept_approval', 'created_at')->orderBy('created_at', 'ASC')->get()->take(4);

        return view('livewire.admin.admin-dashboard', ['requests' =>$requests,'allReqs' =>$allReqs])->layout('layouts.admin');
    }


}
