<?php

namespace App\Http\Livewire\HR;

use App\Models\User;
use App\Models\Request;
use Livewire\Component;
use App\Models\MainRequest;
use App\Mail\PurchaseRequest;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HRRequestDetails extends Component
{
    public $method;
    public $reqNo;
    public $dept_approval;
    public $dept_remark;
    public $remark;
    public $req_id;

    public $receiver;
    public $rec_name;

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
                    'dept_approval' => 'Approved',
                    'dept_remark' => $this->remark
                ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
                    'dept_approval' => 'Approved',
                    'dept_remark' => $this->remark
                ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Department",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Department Email'
        ];
        $head = User::where('utype', 'PROC')->first(['email', 'fname', 'lname']);
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
            'dept_approval' => 'Revised',
            'dept_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'dept_approval' => 'Revised',
            'dept_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Revised',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Department",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Department Email'
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
            'dept_approval' => 'Declined',
            'dept_remark' => $this->remark
        ]);
        MainRequest::where('reqNo', $this->reqNo)->update([
            'dept_approval' => 'Declined',
            'dept_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Item Purchase Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Department",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Department Email'
        ];
        $receiv  = [$this->receiver, $this->rec_name];
        $type= "Purchase";
        $recs = array($receiv);
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
        return view('livewire.h-r.h-r-request-details', ['details' =>$details, 'req'=>$req])->layout('layouts.admin');
    }
}
