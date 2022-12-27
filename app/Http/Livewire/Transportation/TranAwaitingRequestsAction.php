<?php

namespace App\Http\Livewire\Transportation;

use Livewire\Component;
use App\Mail\CarService;
use App\Models\ServiceRequest;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Mail;

class TranAwaitingRequestsAction extends Component
{

    public $reqNo;
    public $remark;
    public $method;
    public $garage;

    public $receiver;
    public $rec_name;

    public function mount($reqNo) {
        $this->reqNo = $reqNo;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'remark' => ['required'],
            'garage' => ['required']
        ]);
    }

    public function approveRequest()
    {
        $this->validate([
            'remark' => ['required'],
            'garage' => ['required']
        ]);
        ServiceRequest::where('reqNo', $this->reqNo)->update([
            'garage' => $this->garage,
            'tran_approval' => 'Approved',
            'tran_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Car Service Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Transport",
            'garage'=>$this->garage,
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Transport Email',
        ];
        $receiv = [$this->receiver, $this->rec_name];
        $type= "Travel";
        $recs = array($receiv);
        $kk = PMailer::customEmail($mailData, $recs, $type);
        $this->dispatchBrowserEvent('success-reload');
    }

    public function declineRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        ServiceRequest::where('reqNo', $this->reqNo)->update([
            'tran_approval' => 'Declined',
            'tran_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Car Service Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Transport",
            'garage'=>$this->garage,
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Transport Email',
        ];
        $receiv = [$this->receiver, $this->rec_name];
        $type= "Travel";
        $recs = array($receiv);
        $kk = PMailer::customEmail($mailData, $recs, $type);
        $this->dispatchBrowserEvent('success-reload');
    }

    public function render()
    {
        $req = ServiceRequest::where('reqNo', $this->reqNo)
                    ->join('users', 'users.id', 'service_requests.user_id')
                    ->join('departments', 'departments.id', 'users.department')
                    ->first();
        $this->receiver = $req->email;
        $this->rec_name = $req->fname.' '.$req->lname;
        return view('livewire.transportation.tran-awaiting-requests-action', ['req'=>$req])->layout('layouts.admin');
    }
}
