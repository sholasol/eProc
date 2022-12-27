<?php

namespace App\Http\Livewire\HR;

use App\Models\Car;
use App\Models\User;
use Livewire\Component;

class ViewCar extends Component
{
    public $vid;

    public $cid;
    public $name;
    public $vno;
    public $price;
    public $color;
    public $type;
    public $vehicle_image;
    public $assignee;
    public $additional_information;

    public $assigneename;

    public function mount($vid) {
        $this->vid = $vid;

        $quer = Car::where('cars.id', $this->vid);
        if ($quer->exists()) {
            $prevVeh = $quer->leftjoin('users', 'users.id', 'cars.assignee')->first(['cars.*', 'users.fname', 'users.lname']);
            $this->cid = $prevVeh->id;
            $this->name = $prevVeh->name;
            $this->vno = $prevVeh->vno;
            $this->price = $prevVeh->price;
            $this->color = $prevVeh->color;
            $this->type = $prevVeh->type;
            $this->assignee = $prevVeh->assignee;
            $this->vehicle_image = $prevVeh->vehicle_image;
            $this->additional_information = $prevVeh->additional_information;

            $this->fname = $prevVeh->fname;
            $this->lname = $prevVeh->lname;
        }else {
            return redirect()->route('h-r.managevehicles');
        }
    }

    public function setAssign() {
        if (!empty($this->assignee)) {
            $qe = User::where('id', $this->assignee);
            if ($qe->exists()) {
                $nm = $qe->first(['fname', 'lname']);
                return $nm->fname.' '.$nm->lname;
            }else {
                return "Unassigned";
            }
        }else {
            return "Unassigned";
        }
    }

    public function updated($fields) {
        $this->validateOnly($fields, [
            'name'=>'required|string',
            'vno'=>'required|string|unique:cars,vno,'. $this->cid .',id',
            'price'=>'required|numeric',
            'type'=>'required',
            'color'=>'bail|required|string',
            'additional_information'=>'bail|required|string',
            'assignee'=>'unique:cars,assignee,'.$this->assignee.',id'
        ],[
            'name.required'=>'Vehicle name is required',
            'vno.required'=>'Vehicle number is required',
            'vno.unique'=>'Vehicle already exists',
            'type.required'=>'Specify Vehicle Type: Status / Pool',
            'price.required'=>'Vehicle price is required',
            'price.numeric'=>'Price can only numeric',
            'color.required'=>'Vehicle color will not be stored if you submit empty again',
            'additional_information.required'=>'Vehicle additional information will not be stored if you submit empty again'
        ]);
    }

    public function updateVehicle() {
        $this->validate([
            'name'=>'required|string',
            'vno'=>'required|string|unique:cars,vno,'. $this->cid .',id',
            'price'=>'required|numeric',
            'type'=>'required',
            'color'=>'bail|required|string',
            'additional_information'=>'bail|required|string',
            'assignee'=>'unique:cars,assignee,'.$this->assignee.',id'
        ],[
            'name.required'=>'Vehicle name is required',
            'vno.required'=>'Vehicle number is required',
            'vno.unique'=>'Vehicle already exists',
            'type.required'=>'Specify Vehicle Type: Status / Pool',
            'price.required'=>'Vehicle price is required',
            'price.numeric'=>'Price can only numeric',
            'color.required'=>'Vehicle color will not be stored if you submit empty again',
            'additional_information.required'=>'Vehicle additional information will not be stored if you submit empty again'
        ]);

        $prevCar = Car::where('id',$this->vid)->first();
        $prevCar->name = $this->name;
        $prevCar->vno = $this->vno;
        $prevCar->price = $this->price;
        $prevCar->color = $this->color;
        $prevCar->type = $this->type;
        $this->assignee !== "" ? $prevCar->assignee = $this->assignee : '';
        $prevCar->additional_information = $this->additional_information;
        $prevCar->save();
        $this->dispatchBrowserEvent('car-success');
    }

    public function render()
    {
        $this->assigneename = $this->setAssign();
        $dris = User::join('cars', 'cars.assignee', '!=', 'users.id')
                    ->leftJoin('departments', 'departments.id', 'users.department')
                    ->where('utype', '!=', 'ADM')
                    ->groupBy('users.id')
                    ->get(['departments.name as dept_name', 'users.id', 'fname', 'lname']);

        return view('livewire.h-r.view-car', ['dris'=>$dris])->layout('layouts.admin');
    }
}
