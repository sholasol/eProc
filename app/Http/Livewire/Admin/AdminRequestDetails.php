<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class AdminRequestDetails extends Component
{

    public $reqNo;
    public $dept_approval;
    public $remark;

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

        //$appr = new Request();
        // $appr = Request::find($this->reqNo);

        // $appr->dept_approval = Auth::user()->id;
        // $appr->dept_remark = $this->remark;
        // $appr->save();
        $this->dispatchBrowserEvent('success');
    } 


    public function render()
    {
        $details = Request::where('reqNo', $this->reqNo)->get();
        $req = Request::where('reqNo', $this->reqNo)->first();
        return view('livewire.admin.admin-request-details', ['details' =>$details, 'req'=>$req])->layout('layouts.admin');
    }
}
