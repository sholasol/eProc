<?php

namespace App\Http\Livewire\Procurement;

use App\Models\User;
use App\Models\Request;
use Livewire\Component;
use App\Models\MainRequest;
use App\Mail\PurchaseRequest;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Mail;

class AwaitingApproval extends Component
{

    public $method;
    public $reqNo;
    public $proc_approval;
    public $proc_remark;
    public $remark;
    public $req_id;

    public $receiver;
    public $rec_name;

    public function mount($reqNo)
    {
        $this->reqNo = $reqNo;
        $rq = Request::where('reqNo', $reqNo)->first();
        $this->proc_approval = $rq->proc_approval;
        $this->proc_remark = $rq->remark;
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
            'proc_approval' => 'Approved',
            'proc_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'proc_approval' => 'Approved',
            'proc_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Procurement",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Procurement Email'
        ];
        $head = User::where('utype', 'FIN')->first(['email', 'fname', 'lname']);
        $headMail = [$head->email, $head->fname.' '.$head->lname];
        $receiv  = [$this->receiver, $this->rec_name];

        $type= "Purchase";
        $recs = array($receiv, $headMail);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }


    public function reviseRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        Request::where('reqNo', $this->reqNo)->update([
            'proc_approval' => 'Revised',
            'proc_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'proc_approval' => 'Revised',
            'proc_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Revised',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Procurement",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Procurement Email'
        ];
        $receiv  = [$this->receiver, $this->rec_name];
        $type= "Purchase";
        $recs = array($receiv);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }

    public function declineRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        Request::where('reqNo', $this->reqNo)->update([
            'proc_approval' => 'Declined',
            'proc_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'proc_approval' => 'Declined',
            'proc_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Procurement",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Procurement Email'
        ];
        $receiv  = [$this->receiver, $this->rec_name];
        $type= "Purchase";
        $recs = array($receiv);
        $kk = PMailer::customEmail($mailData, $recs, $type);
        
        $this->dispatchBrowserEvent('success-reload');
    }

    public function render()
    {
        // $rem = MainRequest::where('reqNo', $this->reqNo)->get();
        $details = Request::where('reqNo', $this->reqNo)->get();
        $req = Request::where('reqNo', $this->reqNo)
                ->join('users', 'users.id', 'requests.user_id')
                ->first(['requests.*','users.email','users.fname','users.lname']);
        $this->receiver = $req->email;
        $this->rec_name = $req->fname.' '.$req->lname;
        return view('livewire.procurement.awaiting-approval', ['details' =>$details, 'req'=>$req])->layout('layouts.admin');
    }
}
