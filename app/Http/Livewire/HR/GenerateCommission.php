<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\CommissionCalc;
use Maatwebsite\Excel\Facades\Excel;


class GenerateCommission extends Component
{
    use WithFileUploads;

    public $xlsx;

    public function updated($fields) {
        $this->validateOnly($fields, [
            'xlsx' => 'required|mimes:xlsx,xls'
        ],[
            'xlsx.required' => 'Please select a file to upload!!!',
            'xlsx.mimes' => 'File must be an excel spreadsheet!!!',
        ]);
    }

    public function import() {
        $this->validate([
            'xlsx' => 'required|mimes:xlsx,xls'
        ],[
            'xlsx.required' => 'Please select a file to upload!!!',
            'xlsx.mimes' => 'File must be an excel spreadsheet!!!',
        ]);
        if (Excel::import(new CommissionCalc, $this->xlsx)) {
            $this->dispatchBrowserEvent('success-reload');
        }else {

        }

    }

    public function render()
    {
        return view('livewire.h-r.generate-commission')->layout('layouts.admin');
    }
}
