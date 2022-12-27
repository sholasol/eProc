<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use App\Models\SalaryTemp;
use App\Models\AllowDeduct;
use Illuminate\Support\Facades\DB;

class SalaryTemplateDetails extends Component
{
    public $code;

    public function mount($code)
    {
        $this->code = $code;
    }


    public function render()
    {
        $temp = SalaryTemp::where('uniqcode', $this->code)->first(['name', 'amount','tax']);
        $allows = AllowDeduct::where('temp_code', $this->code)
                ->where('type', 'Allowance')
                ->get(['name','value']);

        $deducts = AllowDeduct::where('temp_code', $this->code)
                ->where('type', 'Deduction')
                ->get(['name','value']);

        $allowance = AllowDeduct::where('temp_code', $this->code)
                ->where('type', 'Allowance')
                ->sum('value');

        $deduction = AllowDeduct::where('temp_code', $this->code)
                ->where('type', 'Deduction')
                ->sum('value');


        return view('livewire.h-r.salary-template-details', ['temp'=>$temp,'allows'=>$allows,'deducts'=>$deducts, 'allowance'=>$allowance, 'deduction'=>$deduction])->layout('layouts.admin');
    }
}
