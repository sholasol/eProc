<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Mail\WorkFlowMail;
use App\Models\TravelExpense;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Mail;

class DepartmentTravelRequestAction extends Component
{

    public $method;
    public $remark;
    public $receiver;
    public $rec_name;


    public function mount($reqNo) {
        $this->reqNo = $reqNo;
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
        TravelExpense::where('reqNo', $this->reqNo)->update([
            'dept_approval' => 'Approved',
            'dept_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Department",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Department Email'
        ];
        $head = User::where('utype', 'PROC')->first(['email','fname','lname']);
        $headMail = [$head->email, $head->fname.' '.$head->lname];
        $type = "Travel";
        $receiv = [$this->receiver, $this->rec_name];
        $recs = array($receiv, $headMail);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }


    public function reviseRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);

        TravelExpense::where('reqNo', $this->reqNo)->update([
            'dept_approval' => 'Revised',
            'dept_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Revised',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>'Department',
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Department Email'
        ];
        $type = "Travel";
        $receiv = [$this->receiver, $this->rec_name];
        $recs = array($receiv);
        $kk = PMailer::customEmail($mailData, $recs, $type);
        $this->dispatchBrowserEvent('success-reload');
    }

    public function declineRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        TravelExpense::where('reqNo', $this->reqNo)->update([
            'dept_approval' => 'Declined',
            'dept_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>'Department',
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Department Email'
        ];
        $type = "Travel";
        $receiv = [$this->receiver, $this->rec_name];
        $recs = array($receiv);
        $kk = PMailer::customEmail($mailData, $recs, $type);
        $this->dispatchBrowserEvent('success-reload');
    }

    public function render()
    {
        $req = TravelExpense::where('reqNo', $this->reqNo)
                ->join('users', 'users.id', 'travel_expenses.user_id')
                ->join('departments', 'departments.id', 'travel_expenses.department')
                ->first();
        $this->receiver = $req->email;
        $this->rec_name = $req->fname.' '.$req->lname;
        return view('livewire.user.department-travel-request-action', ['req'=>$req])->layout('layouts.admin');
    }
}
