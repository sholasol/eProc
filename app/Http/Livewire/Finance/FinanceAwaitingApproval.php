<?php

namespace App\Http\Livewire\Finance;

use App\Models\Request;
use Livewire\Component;
use App\Models\MainRequest;
use App\Mail\PurchaseRequest;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Mail;

class FinanceAwaitingApproval extends Component
{

    public $method;
    public $reqNo;
    public $fin_approval;
    public $fin_remark;
    public $remark;
    public $req_id;

    public $receiver;
    public $rec_name;

    public function mount($reqNo)
    {
        $this->reqNo = $reqNo;
        $rq = Request::where('reqNo', $reqNo)->first();
        $this->fin_approval = $rq->fin_approval;
        $this->fin_remark = $rq->remark;
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
            'fin_approval' => 'Approved',
            'fin_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Approved',
            'fin_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Finance",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Finance Email'
        ];

        $type= "Purchase";
        $recs = array([$this->receiver, $this->rec_name]);
        $kk = PMailer::customEmail($mailData, $recs, $type);
        $this->dispatchBrowserEvent('success-reload');
    }


    public function reviseRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        Request::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Revised',
            'fin_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Revised',
            'fin_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Revised',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Finance",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Finance Email'
        ];
        $type= "Purchase";
        $recs = array([$this->receiver, $this->rec_name]);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }

    public function declineRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        Request::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Declined',
            'fin_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Declined',
            'fin_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Finance",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Finance Email'
        ];

        $type= "Purchase";
        $recs = array([$this->receiver, $this->rec_name]);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }

    public function render()
    {
        $details = Request::where('reqNo', $this->reqNo)->get();
        $req = Request::where('reqNo', $this->reqNo)
                ->join('users', 'users.id', 'requests.user_id')
                ->first(['requests.*','users.email','users.fname','users.lname']);
        $this->receiver = $req->email;
        $this->rec_name = $req->fname.' '.$req->lname;
        return view('livewire.finance.finance-awaiting-approval', ['details' =>$details, 'req'=>$req])->layout('layouts.admin');
    }
}
