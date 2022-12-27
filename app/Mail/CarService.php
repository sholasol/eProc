<?php

namespace App\Mail;

use App\Mail\CarService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\ServiceRequest;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CarService extends Mailable
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
        $req = ServiceRequest::where('reqNo', $this->mailData['req_no'])->first();
        return $this->subject($this->mailData['subject'])
                ->view('livewire.email.car-service-mail', ['req'=>$req]);
    }
}
