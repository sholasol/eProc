<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Department;

class AdminApprovalLimit extends Component
{
    public $name;
    public $fname;
    public $lname;
    public $department_head;
    public $limit;
    public $dept_id;
    public $user_id;

    public function mount($dept_id)
    {
        $dep = Department::where('id', $dept_id)->first();
        $this->name = $dep->name;
        $this->head = $dep->head;
        $this->user_id = $dep->user_id;
        $this->limit = $dep->approval;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => ['required', 'string', 'max:255'],
            'department_head' => ['required'],
            'limit' => ['required']
        ]);
    }



    public function createApproval() {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'department_head' => ['required'],
            'limit' => ['required']
        ]);




        $dept = Department::find($this->dept_id);
        $dept->name = $this->name;
        $dept->user_id = $this->department_head;
        $dept->approval = $this->limit;
        $dept->save();

        $this->dispatchBrowserEvent('success');
    }




    public function render()
    {
        return view('livewire.admin.admin-approval-limit', ['users'=>User::all()])->layout('layouts.admin');
    }
}
