<?php

namespace App\Http\Livewire\HR;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use Livewire\Component;
use App\Mail\PurchaseRequest;
use Livewire\WithFileUploads;
use Illuminate\Support\PMailer;

class CreateCar extends Component
{

    use WithFileUploads;

    public $name;
    public $vno;
    public $price;
    public $color;
    public $type;
    public $assignee = '';
    public $vehicle_image;
    public $additional_information;

    public $stat;

    public function mount($stat = "") {
        if ($stat == "status" || $stat == "pool") {
            $this->type = $stat;
        }
    }

    public function updated($fields) {
        $this->validateOnly($fields, [
            'name'=>'required|string',
            'vno'=>'required|unique:cars,vno|string',
            'price'=>'required|numeric',
            'type'=>'required',
            'color'=>'bail|required|string',
            'assignee'=>'unique:cars,assignee',
            'vehicle_image'=>'required|mimes:jpg,jpeg,webp,png',
            'additional_information'=>'bail|required|string'
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

    public function vehicleOnboard() {
        $this->validate([
            'name'=>'required|string',
            'vno'=>'required|unique:cars,vno|string',
            'price'=>'required|numeric',
            'type'=>'required',
            'color'=>'bail|required|string',
            'assignee'=>'unique:cars,assignee',
            'vehicle_image'=>'required|mimes:jpg,jpeg,webp,png',
            'additional_information'=>'bail|required|string'
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

        $newCar = new Car();
        $newCar->name = $this->name;
        $newCar->vno = $this->vno;
        $newCar->price = $this->price;
        $newCar->color = $this->color;
        $newCar->type = $this->type;
        $newCar->status = "Active";
        $this->assignee !== "" ? $newCar->assignee = $this->assignee : '';

        if ($this->vehicle_image) {
            $vImg = Carbon::now()->timestamp.'.'.$this->vehicle_image->extension();
            $this->vehicle_image->storeAs('vehicles', $vImg);
            $newCar->vehicle_image  = $vImg;
        }
        $newCar->additional_information = $this->additional_information;

        $newCar->save();
        $this->dispatchBrowserEvent('car-success');
    }
    public function render()
    {
        $dris = User::join('cars', 'cars.assignee', '!=', 'users.id')
                    ->leftJoin('departments', 'departments.id', 'users.department')
                    ->where('utype', '!=', 'ADM')
                    ->groupBy('users.id')
                    ->get(['departments.name as dept_name', 'users.id', 'fname', 'lname']);

        return view('livewire.h-r.create-car', ['dris'=>$dris])->layout('layouts.admin');
    }
}
