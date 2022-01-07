<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminUserRequest extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-user-request')->layout('layouts.admin');
    }
}
