<?php

namespace App\Http\Livewire\Procurement;

use App\Models\User;
use Livewire\Component;
use App\Mail\WorkFlowMail;
use App\Models\TravelExpense;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Mail;

class AwaitingTravelExpenseSingle extends Component
{

    public $reqNo;
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
            'proc_approval' => 'Approved',
            'proc_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>"Procurement",
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Procurement Email',
        ];


        $head = User::where('utype', 'FIN')->first(['email', 'fname', 'lname']);
        $headMail = [$head->email, $head->fname.' '.$head->lname];
        $receiv = [$this->receiver, $this->rec_name];
        $type= "Travel";
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
            'proc_approval' => 'Revised',
            'proc_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Revised',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Procurement Email'
        ];
        $head = User::where('utype', 'FIN')->first(['email', 'fname', 'lname']);
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
        TravelExpense::where('reqNo', $this->reqNo)->update([
            'proc_approval' => 'Declined',
            'proc_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Procurement Email'
        ];
        $receiv = [$this->receiver, $this->rec_name];
        $type= "Travel";
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
        return view('livewire.procurement.awaiting-travel-expense-single', ['req'=>$req])->layout('layouts.admin');
    }
}
