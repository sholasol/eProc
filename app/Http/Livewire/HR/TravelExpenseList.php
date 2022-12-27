<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;

class TravelExpenseList extends Component
{
    public function render()
    {
        return view('livewire.h-r.travel-expense-list')->layout('layouts.admin');
    }
}
