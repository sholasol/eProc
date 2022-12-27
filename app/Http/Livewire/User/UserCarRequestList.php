<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CarRequest;
use Illuminate\Support\Facades\Auth;

class UserCarRequestList extends Component
{
    public function render()
    {
        $requests = CarRequest::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('livewire.user.user-car-request-list', ['requests'=>$requests])->layout('layouts.admin');
    }
}
