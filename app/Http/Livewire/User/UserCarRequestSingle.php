<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CarRequest;

class UserCarRequestSingle extends Component
{
    public $reqNo;

    public function mount($reqNo) {
        $this->reqNo = $reqNo;
    }


    public function render()
    {
        $req = CarRequest::where('reqNo', $this->reqNo)->first();
        return view('livewire.user.user-car-request-single', ['req'=>$req])->layout('layouts.admin');
    }
}
