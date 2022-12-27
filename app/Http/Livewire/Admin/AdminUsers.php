<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    public $mode = "all";
    public $staff = "";

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
        // if ($this->mode == "all") {
        //     $users = User::where('utype', '!=', 'ADM')
        //     ->join('departments', 'departments.id', '=', 'users.department' )
        //     ->condWhere('users.condition', $this->staff)
        //     ->orderBy('fname', 'ASC')->paginate(10, array('users.*', 'departments.name as deptname'));
        // }else {
        //     $users = User::join('departments', 'departments.id', '=', 'users.department' )
        //     ->where('users.emptype', '=', $this->mode)
        //     ->condWhere('users.condition', $this->staff)
        //     ->orderBy('fname', 'ASC')->paginate(10, array('users.*', 'departments.name as deptname'));
        // }
        $users = User::where('utype', '!=', 'ADM')
                    ->join('departments', 'departments.id', '=', 'users.department' )
                    ->orderBy('fname', 'ASC')
                    ->paginate(10, array('users.*', 'departments.name as deptname'));

        return view('livewire.admin.admin-users', ['users'=>$users])->layout('layouts.admin');
    }
}
