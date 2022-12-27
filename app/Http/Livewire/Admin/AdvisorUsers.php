<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdvisorUsers extends Component
{

    public function updateUsr($id)
    {
        $usr = User::find($id);
        if ($usr->condition == "Inactive") {
            $usr->condition = "Active";
        }elseif ($usr->condition = "Active") {
            $usr->condition = "Inactive";
        }else {return;}
        $usr->save();
        $this->dispatchBrowserEvent('user_stat_change');
    }

    public function render()
    {
        $users = User::join('departments', 'departments.id', '=', 'users.department' )
            ->where('users.emptype', '=', 'Advisor')
            ->condWhere('users.condition', 'Active')
            ->orderBy('fname', 'ASC')->paginate(10, array('users.*', 'departments.name as deptname'));

        return view('livewire.admin.advisor-users', ['users'=>$users])->layout('layouts.admin');
    }
}
