<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;

class EmployeeSalary extends Component
{
    public function render()
    {
        return view('livewire.h-r.employee-salary')->layout('layouts.admin');
    }
}
