<?php

namespace App\Http\Livewire\User;

use App\Models\Request;
use Livewire\Component;

class PurchaseRequestDetails extends Component
{

    public $reqNo;

    public function mount($reqNo)
    {
        $this->reqNo = $reqNo;
    }


    public function render()
    {
        $details = Request::where('reqNo', $this->reqNo)->get();
        $req = Request::where('reqNo', $this->reqNo)->first();
        return view('livewire.user.purchase-request-details', ['req'=>$req,'details'=>$details])->layout('layouts.admin');
    }
}
