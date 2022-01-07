<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class HRRequestDetails extends Component
{
    public $reqNo;
    public $dept_approval;
    public $dept_remark;
    public $remark;
    public $req_id;

    public $approve = false;
    public $decline = false;
    public $revise = false;

    public function mount($reqNo)
    {
        $this->reqNo = $reqNo;

        $rq = Request::where('reqNo', $reqNo)->first();

        $this->dept_approval = $rq->dept_approval;
        $this->dept_remark = $rq->remark;



    }



    public function AddNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'remark' => ['required']
        ]);
    }

    public function approveRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);

        Request::where('reqNo', $this->reqNo)->update([
                    'dept_approval' => Auth::user()->id,
                    'dept_remark' => $this->remark
                ]);
        $this->dispatchBrowserEvent('hr-success');
    }


    public function reviseRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);

        Request::where('reqNo', $this->reqNo)->update([
                    'dept_remark' => $this->remark
                ]);
        $this->dispatchBrowserEvent('hr-success');
    }

    public function declineRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);

        Request::where('reqNo', $this->reqNo)->update([
                    'dept_remark' => $this->remark
                ]);
        $this->dispatchBrowserEvent('hr-success');
    }


    public function render()
    {
        $rem = Request::where('reqNo', $this->reqNo)->distinct()->get();
        $details = Request::where('reqNo', $this->reqNo)->get();
        $req = Request::where('reqNo', $this->reqNo)->first();
        return view('livewire.h-r.h-r-request-details', ['details' =>$details, 'req'=>$req, 'rem'=>$rem])->layout('layouts.admin');
    }
}
