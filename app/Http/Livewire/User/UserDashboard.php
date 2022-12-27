<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Component
{
    public function render()
    {
        //$sum =  Request::distinct('reqNo')->where('user_id', Auth::user()->id)->count('item');
        $reqs = Request::distinct('reqNo')->where('user_id', Auth::user()->id)->count('id');
        $allReqs = Request::select('reqNo','dept_remark', 'dept_approval', 'created_at')
        ->where('dept_approval', '!=', 'Approved')
        ->where('user_id', Auth::user()->id )->distinct()->get();
        $requests = Request::distinct('reqNo')->where('user_id', Auth::user()->id )->orderby('created_at', 'DESC')->get()->take(5);
        return view('livewire.user.user-dashboard', ['requests' =>$requests, 'reqs' =>$reqs, 'allReqs'=>$allReqs])->layout('layouts.admin');
    }
}
