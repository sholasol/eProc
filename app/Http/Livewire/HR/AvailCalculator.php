<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AvailCalculator extends Component
{

    public $cid;

    public function mount($cid) {
        $this->cid = $cid;
    }

    public function render()
    {
        $date = date('Y-m-d');
        $did = $this->cid;
        $scheds = DB::select(DB::raw("SELECT * FROM
            (SELECT car_requests.req_time, car_requests.destination
                FROM car_requests
                JOIN cars ON car_requests.assignee = cars.assignee
                WHERE car_requests.req_date = '$date' AND cars.type = 'pool'
                AND cars.status = 'Active' AND cars.assignee != '' AND cars.id = $did
                ORDER BY rand()
            )Var1 ORDER BY req_time ASC"));
        return view('livewire.h-r.avail-calculator', ['scheds'=>$scheds])->section('cont');
    }
}
