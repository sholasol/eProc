<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\TravelExpense;
use Illuminate\Support\Facades\Auth;

class DepartmentTravelRequestList extends Component
{
    public function render()
    {
        $requests = TravelExpense::join('users', 'users.id', '=', 'travel_expenses.user_id' )
            ->join('departments', 'departments.id', '=', 'travel_expenses.department' )
            ->where('users.department', '=', Auth::user()->department)
            ->paginate(15,
            array('travel_expenses.*', 'users.fname', 'users.lname',
             'users.profile_photo_path as profile_img', 'departments.name'
            ));
        return view('livewire.user.department-travel-request-list',['requests'=>$requests])->layout('layouts.admin');
    }
}
