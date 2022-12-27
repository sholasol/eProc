<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\TravelExpense;

class AwaitingTravelExpense extends Component
{
    public function render()
    {
        $requests = TravelExpense::join('users', 'users.id', 'travel_expenses.user_id')
            ->join('departments', 'departments.id', 'travel_expenses.department')
            ->where('dept_approval', 'Approved')
            ->orderBy('travel_expenses.id', 'desc')
            ->paginate(10);
        return view('livewire.procurement.awaiting-travel-expense', ['requests'=>$requests])->layout('layouts.admin');
    }
}
