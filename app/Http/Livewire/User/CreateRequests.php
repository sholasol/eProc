<?php

namespace App\Http\Livewire\User;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Request;
use Livewire\Component;
use App\Mail\CarService;
use App\Mail\WorkFlowMail;
use App\Models\CarRequest;
use App\Models\MainRequest;
use Illuminate\Support\Str;
use App\Mail\PoolCarRequest;
use App\Mail\PurchaseRequest;
use App\Models\TravelExpense;
use App\Models\ServiceRequest;
use Illuminate\Support\PMailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CreateRequests extends Component
{

        public $mode;
        // public $calReturn;

        // FOR SERVICE CAR REQUEST
        public $vehicle_number;
        public $service_date;
        public $service_additional_information;

        // FOR TRAVEL EXPENSE
        public $travel_destination;
        public $duration;
        public $departure;
        public $return_date;
        public $total_expense;
        public $bank;
        public $acc_no;
        public $acc_name;
        public $travel_additional_information;

        // FOR CAR REQUEST
        public $pick_location;
        public $desired_destination;
        public $request_time;
        public $request_date;
        public $car_additional_information;

        // FOR ITEM REQUEST
        public $department;
        public $date;
        public $description;
        public $destination;
        public $item;
        public $qty;
        public $user_id;
        public $price;
        public $remark;
        public $additional_information;
        public $i =1;
        public $inputs = [];

        public function AddNew($i)
        {

            $i = $i +1;
            $this->i = $i;

            array_push($this->inputs, $i);
        }

        public function Remove($i)
        {
            unset($this->inputs[$i]);
        }

        public function updated($fields)
        {
            $this->validateOnly($fields, [
                'item.0' => ['required'],
                'qty.0' => ['required'],
                'description.0' => ['required'],
                'item.*' => ['required'],
                'qty.*' => ['required'],
                'description.*' => ['required'],

                'vehicle_number'=>'required',
                'service_date'=>'required',
                'service_additional_information'=>'required',


                'travel_destination'=>'required',
                'duration'=>'required|numeric',
                'departure'=>'required',
                // 'return_date'=>'required',
                'total_expense'=>'required',
                'bank'=>'required',
                'acc_no'=>'required|numeric|min:10',
                'acc_name'=>'required',
                'travel_additional_information'=>'required',

                'pick_location'=>'required',
                'desired_destination'=>'required',
                'request_time'=>'required',
                'request_date'=>'required',
                'car_additional_information'=>'required'
            ],[
                'acc_name.required'=>'Account name is required',
                'acc_no.required'=>'Account number is required',
                'acc_no.numeric'=>'Account number can only be numbers',
                'acc_no.min'=>'Account number cannot be more than 10 digits',

                'pick_location.required'=>'Enter location you\'ll be picked up from',
                'desired_destination.required'=>'Input the location you wish to be transported',
                'car_additional_information.required'=>'Provide more info on your request',
            ]);
        }

        public function itemRequest()
        {
            $this->validate([
                'item.0' => ['required'],
                'qty.0' => ['required'],
                'description.0' => ['required'],
                'item.*' => ['required'],
                'qty.*' => ['required'],
                'description.*' => ['required']
            ]);


            $randomString = Str::random(5);
            $reqNo = "OMP-".$randomString;

            $mainReq = new MainRequest();
            $mainReq->reqNo = $reqNo;
            $mainReq->user_id = Auth::user()->id;
            $mainReq->department = Auth::user()->department;
            $mainReq->save();

            foreach ($this->item as $key => $value) {
                Request::create([
                    'user_id' => Auth::user()->id,
                    'department' => Auth::user()->department,
                    'reqNo' => $reqNo,
                    'item' => $this->item[$key],
                    'description' => $this->description[$key],
                    'quantity' => $this->qty[$key]
                ]);
            }

            $mailData = [
                'reply_type'=>'Awaiting',
                'subject'=>'Item Purchase Request - Old Mutual',
                'remark'=>'This request is new and needs your review as head of department, so that it can be passed on to the next review stage',
                'who_rem'=>"System",
                'req_no'=>$reqNo,
                'user_name'=>Auth::user()->fname.' '.Auth::user()->lname,
                'doc_title'=>'System Email',
            ];

            $type = "Purchase";

            $head = User::where('utype', '!=', 'USR')
                        ->where('department', Auth::user()->department)
                        ->first(['email', 'fname', 'lname']);
            $recs = array([$head->email, $head->fname.' '.$head->lname]);
            $kk = PMailer::customEmail($mailData, $recs, $type);

            $this->dispatchBrowserEvent('success-reload');
        }

        public function serviceCar()
        {
            $this->validate([
                'vehicle_number'=>'required',
                'service_date'=>'required',
                'service_additional_information'=>'required',
            ]);


            $randomString = Str::random(7);
            $reqNo = "OMCS-".$randomString;

            $servCar = new ServiceRequest();
            $servCar->reqNo = $reqNo;
            $servCar->user_id = Auth::user()->id;
            $servCar->vehicle_no = $this->vehicle_number;
            $servCar->req_date = $this->service_date;
            $servCar->additional_information = $this->service_additional_information;
            $servCar->save();

            $mailData = [
                'reply_type'=>'Awaiting',
                'subject'=>'Car Service Request - Old Mutual',
                'remark'=>'This request is new and needs your review as head of department',
                'who_rem'=>"System",
                'req_no'=>$reqNo,
                'user_name'=>Auth::user()->fname.' '.Auth::user()->lname,
                'doc_title'=>'System Email',
            ];

            $type = 'Service';

            $head = User::where('department', Auth::user()->department)
                        ->where('utype', '!=', 'USR')
                        ->orWhere('utype', 'PROC')
                        ->first(['email', 'fname', 'lname']);
            $recs = array([$head->email, $head->fname.' '.$head->lname]);
            $kk = PMailer::customEmail($mailData, $recs, $type);

            $this->dispatchBrowserEvent('success-reload');

        }

        public function travelRequest()
        {
            $this->validate([
                'travel_destination'=>'required',
                'duration'=>'required|numeric',
                'departure'=>'required',
                'total_expense'=>'required',
                'bank'=>'required',
                'acc_no'=>'required|numeric|min:10',
                'acc_name'=>'required',
                'travel_additional_information'=>'required'
            ],[
                'acc_name.required'=>'Account name is required',
                'acc_no.required'=>'Account number is required',
                'acc_no.numeric'=>'Account number can only be numbers',
                'acc_no.min'=>'Account number cannot be more than 10 digits'
            ]);

            $retDate = Carbon::parse($this->departure)->addDays($this->duration);
            $randomString = Str::random(7);
            $reqNo = "OMTE-".$randomString;

            $travExp = new TravelExpense();
            $travExp->reqNo = $reqNo;
            $travExp->user_id = Auth::user()->id;
            $travExp->department = Auth::user()->department;
            $travExp->destination = $this->travel_destination;
            $travExp->duration = $this->duration;
            $travExp->departure = $this->departure;
            $travExp->return_date = $retDate;

            $travExp->total_expense = $this->total_expense;
            $travExp->bank = $this->bank;
            $travExp->acc_no = $this->acc_no;
            $travExp->acc_name = $this->acc_name;
            $travExp->additional_information = $this->travel_additional_information;
            $travExp->save();

            $mailData = [
                'reply_type'=>'Awaiting',
                'subject'=>'Travel Expense Request - Old Mutual',
                'remark'=>'This request is new and needs your review as head of department, so that it can be passed on to the next review stage',
                'who_rem'=>"System",
                'req_no'=>$reqNo,
                'user_name'=>Auth::user()->fname.' '.Auth::user()->lname,
                'doc_title'=>'System Email',
            ];

            $type = "Travel";

            $head = User::where('utype', '!=', 'USR')
                        ->where('department', Auth::user()->department)
                        ->first(['email', 'fname', 'lname']);
            $recs = array([$head->email, $head->fname.' '.$head->lname]);
            $kk = PMailer::customEmail($mailData, $recs, $type);

            $this->dispatchBrowserEvent('success-reload');

        }

        public function carRequest()
        {
            $this->validate([
                'pick_location'=>'required',
                'desired_destination'=>'required',
                'request_time'=>'required',
                'request_date'=>'required',
                'car_additional_information'=>'required'
            ],[

                'pick_location.required'=>'Enter location you\'ll be picked up from',
                'desired_destination.required'=>'Input the location you wish to be transported to',
                'car_additional_information.required'=>'Provide more info on your request',
            ]);

            $randomString = Str::random(7);
            $reqNo = "OMCR-".$randomString;

            $carReq = new CarRequest();
            $carReq->reqNo = $reqNo;
            $carReq->user_id = Auth::user()->id;
            $carReq->department = Auth::user()->department;
            $carReq->req_date = $this->request_date;
            $carReq->req_time = $this->request_time;
            $carReq->from = $this->pick_location;
            $carReq->destination = $this->desired_destination;
            $carReq->additional_information = $this->car_additional_information;
            $carReq->save();


            $mailData = [
                'reply_type'=>'Awaiting',
                'subject'=>'Pool Car Request - Old Mutual',
                'remark'=>'This request is new and needs your review as head of department, so that it can be passed on to the next review stage',
                'who_rem'=>"System",
                'req_no'=>$reqNo,
                'user_name'=>Auth::user()->fname.' '.Auth::user()->lname,
                'doc_title'=>'System Email',
            ];
            $type = "Pool";
            $head = User::where('utype', '!=', 'USR')
                        ->where('department', Auth::user()->department)
                        ->first(['email', 'fname', 'lname']);
            $recs = array([$head->email, $head->fname.' '.$head->lname]);
            $kk = PMailer::customEmail($mailData, $recs, $type);

            $this->dispatchBrowserEvent('success-reload');
        }



    public function render()
    {
        return view('livewire.user.create-requests')->layout('layouts.admin');
    }
}
