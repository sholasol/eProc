<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\TravelExpense;
use Illuminate\Support\Facades\Auth;

class UserTravelExpense extends Component
{
    public function render()
    {
        $requests = TravelExpense::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('livewire.user.user-travel-expense', ['requests'=>$requests])->layout('layouts.admin');
    }
}
