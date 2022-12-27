<?php

namespace App\Http\Livewire\Finance;

use Livewire\Component;
use App\Models\TravelExpense;

class FinAwaitingTravelExpense extends Component
{
    public function render()
    {
        $requests = TravelExpense::join('users', 'users.id', 'travel_expenses.user_id')
            ->join('departments', 'departments.id', 'travel_expenses.department')
            ->where('proc_approval', 'Approved')
            ->orderBy('travel_expenses.id', 'desc')
            ->paginate(10);
        return view('livewire.finance.fin-awaiting-travel-expense', ['requests'=>$requests])->layout('layouts.admin');
    }
}
