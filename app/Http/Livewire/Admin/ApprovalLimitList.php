<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\User;
use Livewire\WithPagination;

class ApprovalLimitList extends Component
{
    Use WithPagination;

    public function render()
    {
        $depts = Department::join('users', 'users.id', '=', 'departments.user_id' )
        ->orderby('departments.id', 'DESC')
        ->get(['departments.*', 'users.fname', 'users.lname']);

        return view('livewire.admin.approval-limit-list' , ['depts' =>$depts])->layout('layouts.admin');
    }
}
