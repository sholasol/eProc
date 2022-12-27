<?php

namespace App\Http\Livewire\Finance;

use Livewire\Component;
use App\Mail\WorkFlowMail;
use App\Models\TravelExpense;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Mail;

class FinAwaitingTravelExpenseSingle extends Component
{

    public $reqNo;
    public $method;
    public $remark;
    public $receiver;
    public $rec_name;

    public function mount($reqNo) {
        $this->reqNo = $reqNo;
    }

    public function approveRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        TravelExpense::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Approved',
            'fin_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Approved',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>'Finance',
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Finance Email'
        ];
        $type= "Travel";
        $recs = array([$this->receiver, $this->rec_name]);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }


    public function reviseRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        TravelExpense::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Revised',
            'fin_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Revised',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>'Finance',
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Finance Email'
        ];
        $type= "Travel";
        $recs = array([$this->receiver, $this->rec_name]);
        $kk = PMailer::customEmail($mailData, $recs, $type);

        $this->dispatchBrowserEvent('success-reload');
    }

    public function declineRequest()
    {
        $this->validate([
            'remark' => ['required']
        ]);
        TravelExpense::where('reqNo', $this->reqNo)->update([
            'fin_approval' => 'Declined',
            'fin_remark' => $this->remark
        ]);
        $mailData = [
            'reply_type'=>'Declined',
            'subject'=>'Travel Expense Request - Old Mutual',
            'remark'=>$this->remark,
            'who_rem'=>'Finance',
            'req_no'=>$this->reqNo,
            'user_name'=>$this->rec_name,
            'doc_title'=>'Finance Email'
        ];
        $type= "Travel";
        $recs = array([$this->receiver, $this->rec_name]);
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
        return view('livewire.finance.fin-awaiting-travel-expense-single', ['req'=>$req])->layout('layouts.admin');
    }
}
