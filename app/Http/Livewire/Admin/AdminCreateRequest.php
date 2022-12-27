<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class AdminCreateRequest extends Component
{

        public $location;
        public $department;
        public $date; //utype
        public $description;
        public $item;
        public $qty;
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
            'location' => ['required'],
            'department' => ['required'],
            'additional_information' => ['required'],
            'item.0' => ['required'],
            'qty.0' => ['required'],
            'price.0' => ['required'],
            'description.0' => ['required'],
            'item.*' => ['required'],
            'qty.*' => ['required'],
            'price.*' => ['required'],
            'description.*' => ['required']
        ]);
    } 

        public function createRequest()
        {
            $this->validate([
                'location' => ['required'],
                'department' => ['required'],
                'additional_information' => ['required'],
                'item.0' => ['required'],
                'qty.0' => ['required'],
                'price.0' => ['required'],
                'description.0' => ['required'],
                'item.*' => ['required'],
                'qty.*' => ['required'],
                'price.*' => ['required'],
                'description.*' => ['required']
            ]);
            
        }


    public function render()
    {  
        return view('livewire.admin.admin-create-request')->layout('layouts.admin');
    }
}
