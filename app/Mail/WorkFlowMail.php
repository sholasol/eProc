<?php

namespace App\Mail;

use App\Models\TravelExpense;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkFlowMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $req = TravelExpense::where('reqNo', $this->mailData['req_no'])->first();
        return $this->subject($this->mailData['subject'])
                ->view('livewire.email.approval-workflow', ['req'=>$req]);
    }
}
