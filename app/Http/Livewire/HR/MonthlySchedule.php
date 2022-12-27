<?php

namespace App\Http\Livewire\HR;

use DateTime;
use Livewire\Component;
use App\Models\PaymentActivity;

class MonthlySchedule extends Component
{

    public $year;
    public $month;
    public $mv;
    public $yv;


    // public function setVariable() {
    //     if (empty($this->year)) {
    //         $this->year = date('Y');
    //     }
    //     if (empty($this->month)) {
    //         $this->year = date('m');
    //     }
    // }

    public function generateHistory() {
        $this->validate([
            'year'=>'required',
            'month'=>'required'
        ]);
    }



    public function render()
    {
        // if ($this->tb_mode == 0) {
        //     $mon = date('m');
        //     $yr = date('Y');
        //     $tables = PaymentActivity::where('month', $mon)->where('year', $yr)->get();
        // }else {
        //     $tables = PaymentActivity::where('month', $this->month)->where('year', $this->year)->get();
        // }
        $m = $this->month;
        $y = $this->year;

        if ($this->year =="") {
            $y = date('Y');
        }
        if ($this->month =="") {
            $m = date('m');
        }

        $datObj = DateTime::createFromFormat('!m', $m);

        $this->mv = $datObj->format('F');
        $this->yv = $y;


        $years = PaymentActivity::distinct('year')->get(['year']);

        $tables = PaymentActivity::join('users', 'users.id', 'payment_activities.employee_id')
                    ->join('departments', 'departments.id', 'users.department')
                    ->where('month', $m)->where('year', $y)
                    ->get(['payment_activities.*', 'users.fname', 'users.lname', 'users.profile_photo_path',
                            'departments.name as dept_name']);

        return view('livewire.h-r.monthly-schedule', ['years'=>$years, 'tables'=>$tables])->layout('layouts.admin');
    }
}
