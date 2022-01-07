<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminClaims extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-claims')->layout('layouts.admin');
    }
}
