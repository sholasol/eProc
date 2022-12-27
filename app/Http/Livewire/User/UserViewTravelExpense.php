<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\TravelExpense;
use Illuminate\Support\Facades\Auth;

class UserViewTravelExpense extends Component
{

    public $method;
    public $reqNo;
    public $remark;
    public $req_id;

    // public function doField() {
    //     if (Auth::user()->utype == "PROC") {
    //         $this->appField = "proc_approval";
    //         $this->remField = "proc_remark";
    //     }elseif (Auth::user()->utype == "FIN") {
    //         $this->appField = "fin_approval";
    //         $this->remField = "fin_remark";
    //     }elseif (Auth::user()->utype !== "USR") {
    //         $this->appField = "dept_approval";
    //         $this->remField = "dept_remark";
    //     }
    // }
    
    public function mount($reqNo) {
        $this->reqNo = $reqNo;
    }

    public function render()
    {
        $req = TravelExpense::where('reqNo', $this->reqNo)->first();
        return view('livewire.user.user-view-travel-expense', ['req'=>$req])->layout('layouts.admin');
    }
}
