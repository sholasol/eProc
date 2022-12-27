<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use App\Models\SalaryTemp;
use App\Models\TravelTemp;

class NewTravelExpense extends Component
{

    public $branch;
    public $destination;
    public $grade;
    public $feeding;
    public $accomodation;
    public $transport;
    public $allowance;

    public function updated($fields) {
        $this->validateOnly($fields,[
            'branch'=>'required',
            'destination'=>'required',
            'grade'=>'required',
            'feeding'=>'required|numeric|integer',
            'accomodation'=>'required|numeric|integer',
            'transport'=>'required|numeric|integer',
            'allowance'=>'required|numeric|integer'
        ]);
    }

    public function subTravTemp() {
        $this->validate([
            'branch'=>'required',
            'destination'=>'required',
            'grade'=>'required',
            'feeding'=>'required|numeric|integer',
            'accomodation'=>'required|numeric|integer',
            'transport'=>'required|numeric|integer',
            'allowance'=>'required|numeric|integer'
        ]);

        $new = new TravelTemp();
        $new->branch = $this->branch;
        $new->destination = $this->destination;
        $new->grade = $this->grade;
        $new->feeding = $this->feeding;
        $new->accomodation = $this->accomodation;
        $new->transport = $this->transport;
        $new->allowance = $this->allowance;
        $new->status = 'Active';
        $new->save();
        $this->dispatchBrowserEvent('success-reload');
    }


    public function render()
    {
        $salaryTemp = SalaryTemp::all();
        return view('livewire.h-r.new-travel-expense', ['salaryTemp'=>$salaryTemp])->layout('layouts.admin');
    }
}
