<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use App\Models\SalaryTemp;
use App\Models\AllowDeduct;
use Illuminate\Support\Str;

class CreateSalaryTemplate extends Component
{

    public $grade;
    public $salary;
    public $tax;

    public $i =1;
    public $j = 1;
    public $inputs = [];
    public $ded_input = [];

    public $deductName;
    public $deductVal;
    public $allowanceName;
    public $allowanceVal;


    public function AddNewDeduction($j)
    {

        $j = $j +1;
        $this->j = $j;

        array_push($this->ded_input, $j);
    }

    public function RemoveDeduction($j)
    {
        unset($this->ded_input[$j]);
    }


    public function AddNewAllowance($i)
    {

        $i = $i +1;
        $this->i = $i;

        array_push($this->inputs, $i);
    }

    public function RemoveAllowance($i)
    {
        unset($this->inputs[$i]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'grade' => 'required',
            'salary' => 'required',
            'tax' => 'required'
        ]);
    }

    public function subSalTemp() {
        $this->validate([
            'grade' => 'required|unique:salary_temps,name',
            'salary' => 'required',
            'tax' => 'required'
        ]);

        $cd = Str::random(7);

        $salIns = new SalaryTemp();
        $salIns->uniqcode = $cd;
        $salIns->name = $this->grade;
        $salIns->amount = $this->salary;
        $salIns->tax = $this->tax;

        // dd($this->allowanceName);
        $salIns->save();


        foreach ($this->allowanceName as $key => $nam) {
            if (!empty($nam) || !empty($this->allowanceVal[$key])) {
                $allows = new AllowDeduct();
                $allows->name = $nam;
                $allows->type = 'Allowance';
                $allows->temp_code = $cd;
                $allows->value = $this->allowanceVal[$key];
                $allows->save();
            }
        }

        foreach ($this->deductName as $key => $nam) {
            if (!empty($nam) || !empty($this->deductVal[$key])) {
                $deducts = new AllowDeduct();
                $deducts->name = $nam;
                $deducts->type = 'Deduction';
                $deducts->temp_code = $cd;
                $deducts->value = $this->deductVal[$key];
                $deducts->save();
            }
        }

        $this->dispatchBrowserEvent('success-reload');
    }



    public function render()
    {
        return view('livewire.h-r.create-salary-template')->layout('layouts.admin');
    }
}
