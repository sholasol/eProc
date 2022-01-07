<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ReceivedOrder extends Component
{
    public function render()
    {
        return view('livewire.user.received-order')->layout('layouts.admin');
    }
}
