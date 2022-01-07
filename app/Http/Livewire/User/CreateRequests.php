<?php

namespace App\Http\Livewire\User;

use App\Models\Request;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CreateRequests extends Component
{

    public $location;
        public $department;
        public $date; //utype
        public $description;
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
            // $randomString = Str::random(5);
            // $d = date('Y');
            // $code = "OM/".$randomString;
            // dd($code);

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
            'description.*' => ['required']
        ]);
        }

        public function createRequest()
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
            //$d = date('Y');
            $reqNo = "OM-".$randomString;
            // dd($code);

            foreach ($this->item as $key => $value) {
                Request::create([
                    'user_id' => Auth::user()->id,
                    'department' => Auth::user()->department,
                    'reqNo'   => $reqNo,
                    'item' => $this->item[$key],
                    'description' => $this->description[$key],
                    'quantity' => $this->qty[$key]
                ]);
            }

            $this->dispatchBrowserEvent('user-success');

        }



    public function render()
    {
        return view('livewire.user.create-requests')->layout('layouts.admin');
    }
}
