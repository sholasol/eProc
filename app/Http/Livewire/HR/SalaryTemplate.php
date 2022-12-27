<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use App\Models\SalaryTemp;

class SalaryTemplate extends Component
{
    public function render()
    {
        $temps = SalaryTemp::paginate(10);
        return view('livewire.h-r.salary-template', ['temps'=>$temps])->layout('layouts.admin');
    }
}
