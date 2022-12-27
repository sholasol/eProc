<?php

namespace App\Http\Livewire\User;

use App\Models\Request;
use Livewire\Component;
use App\Models\MainRequest;
use Illuminate\Support\Facades\Auth;

class UserRequests extends Component
{
    public function render()
    {


        //$requests = Request::select('reqNo', 'created_at')->distinct()->get();
        // $requests = Request::select('reqNo','dept_remark', 'proc_remark','fin_remark', 'dept_approval', 'created_at')->where('user_id', Auth::user()->id )->distinct()->get();
        //$requests = Request::distinct('reqNo')->where('user_id', Auth::user()->id )->get()->take(5);
        $requests = MainRequest::where('user_id', Auth::user()->id)->paginate(10);
        return view('livewire.user.user-requests', ['requests' =>$requests])->layout('layouts.admin');
    }
}
