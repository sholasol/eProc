<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class ProcurementViewRequest extends Component
{
    public $reqNo;
    public $dept_approval;

    public function mount($reqNo)
    {
        $this->reqNo = $reqNo;
    }



    public function approvalProcess($id)
    {
        Request::where('reqNo', $id)->update([
            'dept_approval' => Auth::user()->id
        ]);
        $this->dispatchBrowserEvent('success');
    }



    public function AddNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }

    public function render()
    {
        $details = Request::where('reqNo', $this->reqNo)->get();
        $req = Request::where('reqNo', $this->reqNo)->first();
        return view('livewire.procurement.procurement-view-request', ['req'=>$req, 'details'=>$details])->layout('layouts.admin');
    }
}
