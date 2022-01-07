<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\User;

class AdminCreateDept extends Component
{
    public $name;
    public $head;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => ['required', 'string', 'max:255']
        ]);
    }

    public function createDept() {
        $this->validate([
            'name' => ['required']
        ]);

        //$pass = "user@123";

        $usr = new Department();
        $usr->name = $this->name;
        $usr->head = $this->head;
        $usr->save();


        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.admin.admin-create-dept', ['users'=>$users])->layout('layouts.admin');
    }
}
