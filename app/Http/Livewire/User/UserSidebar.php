<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserSidebar extends Component
{
    public function render()
    {
        return view('livewire.user.user-sidebar')->layout('layouts.admin');
    }
}
