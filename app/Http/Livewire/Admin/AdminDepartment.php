<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\User;
use Livewire\WithPagination;

class AdminDepartment extends Component
{
    public function render()
    {
        // $depts = Department::join('users', 'users.id', '=', 'departments.user_id' )
        // ->orderby('departments.id', 'DESC')
        // ->get(['departments.*', 'users.fname', 'users.lname']);

        $depts = Department::orderBy('name', 'ASC')->paginate(15);
        return view('livewire.admin.admin-department', ['depts' =>$depts])->layout('layouts.admin');
    }
}
