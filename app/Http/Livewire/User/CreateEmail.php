<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CreateEmail extends Component
{
    public function render()
    {
        return view('livewire.user.create-email')->layout('layouts.admin');
    }
}
