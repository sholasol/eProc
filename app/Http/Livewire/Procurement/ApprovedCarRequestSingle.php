<?php

namespace App\Http\Livewire\Procurement;

use App\Models\Car;
use App\Models\User;
use Livewire\Component;
use App\Models\CarRequest;

class ApprovedCarRequestSingle extends Component
{

    public $reqNo;
    public $method;
    public $remark;
    public $selCar;

    public $schedule;
    public $req_date;

    public function mount($reqNo) {
        $this->reqNo = $reqNo;
    }

    public function updated($fields) {
        $this->validateOnly($fields, [
            'remark'=> ['required'],
            'selCar'=> ['required']
        ]);
    }

    public function declineRequest() {
        $this->validate([
            'remark'=> ['required']
        ]);
        $quer = CarRequest::where('reqNo', $this->reqNo)->first();
        $quer->tran_approval = "Declined";
        $quer->tran_remark = $this->remark;
        $quer->save();
        $this->dispatchBrowserEvent('success-reload');

    }

    public function assignCar() {
        $this->validate([
            'remark'=> ['required'],
            'selCar'=> ['required']
        ]);

        $carDet = Car::where('id', $this->selCar)->first();

        $quer = CarRequest::where('reqNo', $this->reqNo)->first();
        $quer->tran_approval = "Approved";
        $quer->tran_remark = $this->remark;
        $quer->assignee = $carDet->assignee;
        $quer->vehicle_no = $carDet->vno;
        $quer->save();
        $this->dispatchBrowserEvent('success-reload');

    }

    public function getDrivSchedule() {
        $car = Car::where('id', $this->selCar)->first();
        // dd($car);
        $assignee = $car->assignee;
        $prevSchedules = CarRequest::join('users', 'users.id', 'car_requests.user_id')
        ->leftjoin('departments', 'departments.id', 'car_requests.department')
        ->where('assignee', $assignee)->where('req_date', $this->req_date)
        ->get([
            'car_requests.req_date','car_requests.req_time',
            'users.lname', 'users.fname', 'departments.name as dept_name'
        ]);
        $this->schedule = $prevSchedules;
    }

    public function render()
    {
        $req = CarRequest::where('reqNo', $this->reqNo)
                ->join('users as u', 'u.id', 'car_requests.user_id')
                ->leftjoin('users as d', 'd.id', 'car_requests.assignee')
                ->join('departments', 'departments.id', 'car_requests.department')
                ->first([
                    'car_requests.*', 'u.fname',
                    'u.lname', 'u.email',
                    'd.fname as dfname', 'd.lname as dlname',
                    'd.phone as dphone', 'departments.name'
                ]);
                // dd($req);
        $this->req_date = $req->req_date;
        $drivs = Car::join('users', 'users.id', 'cars.assignee')
                    ->where('users.department', '6')->where('type', 'pool')
                    ->where('cars.status', 'Active')->get(['cars.id', 'users.fname', 'users.lname']);


        if ($this->selCar) {
            $this->getDrivSchedule();
        }


        return view('livewire.procurement.approved-car-request-single', ['req'=>$req, 'drivs'=>$drivs])->layout('layouts.admin');
    }
}
