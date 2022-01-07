<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserEmail extends Component
{
    public function render()
    {
        return view('livewire.user.user-email')->layout('layouts.admin');
    }
}
