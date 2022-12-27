<?php

namespace App\Http\Livewire\Procurement;

use App\Models\User;
use App\Models\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class ProcurementRFQ extends Component
{

    public $select;
    public $lists;

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


    public function sendRequest() {
        $randomString = Str::random(5);
        dd($this->lists, $this->select);
        // dd();

    }

    public function render()
    {
        $requests = Request::join('users', 'users.id', '=', 'requests.user_id' )
        ->where('requests.dept_approval', '=', 'Approved')
        ->where('requests.proc_approval', '=', 'Approved')
        ->where('requests.fin_approval', '=', 'Approved')
        ->get(array('requests.department', 'requests.reqNo', 'requests.item', 'requests.quantity', 'requests.created_at'));
        $vendors = User::where('department', "Vendor")->get();
        return view('livewire.procurement.procurement-r-f-q', ['requests'=>$requests, 'vendors'=>$vendors])->layout('layouts.admin');
    }
}
