<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\MainRequest;
use Illuminate\Support\Facades\Auth;

class RequestList extends Component
{

    public function approveRequest($reqNo) {
        // dd($reqNo);
        $upReq = MainRequest::where('reqNo', $reqNo)->first();
        $upReq->proc_approval = 'Approved';
        $upReq->save();

        $upList = Request::where('reqNo', $reqNo)->get();
        // $upList->
    }
    public function declineRequest($reqNo) {
        // dd($reqNo);
        $upReq = MainRequest::where('reqNo', $reqNo)->first();
        $upReq->proc_approval = 'Declined';
        $upReq->save();
    }

    public function render()
    {

            $requests = MainRequest::join('users', 'users.id', '=', 'main_requests.user_id' )
            ->where('users.department', '=', Auth::user()->department)
            ->orderBy('main_requests.created_at', 'desc')
            ->get(array('users.fname',
             'users.lname',
             'users.profile_photo_path as profile_img',
             'main_requests.department', 'main_requests.dept_approval', 'main_requests.reqNo',
            'main_requests.created_at'));
        return view('livewire.procurement.request-list', ['requests'=>$requests])->layout('layouts.admin');
    }
}
