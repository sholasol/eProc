<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class UserViewRequest extends Component
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
        //$allReqs = Request::select('reqNo', 'dept_approval', 'created_at')->where('user_id', Auth::user()->id )->distinct()->get();
        //$all = Request::select('dept_approval', 'proc_approval', 'fin_approval', 'cfo_approval', 'final_approval')->where('reqNo', $this->reqNo)->get();
        return view('livewire.user.user-view-request', ['details' =>$details, 'req' => $req])->layout('layouts.admin');
    }
}
